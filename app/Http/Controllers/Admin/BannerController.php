<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Contracts\CRUDController;
use App\Services\ImageGeneration\Models\Banner;
use App\Services\ImageGeneration\Repositories\BannerRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class BannerController extends CRUDController
{
    public function __construct()
    {
        $this->CRUDRepository = new BannerRepository();
        $this->item = new Banner();
        $this->routeId = 'banner';
        $this->routeGroup = 'banners';
        $this->viewGroup = 'Banner';
    }

    public function export(): BinaryFileResponse
    {
        $filePath = storage_path('app/banners_export_' . time() . '.csv');
        $fp = fopen($filePath, 'w');
        fputcsv($fp, ['ID', 'Name', 'Banner', 'Email', 'Phone', 'Date', 'Product', 'Company', 'Edrpoy']);
        Banner::query()->chunk(100, function ($items) use ($fp) {
            foreach ($items as $item) {
                $data = $item->toArray();
                unset(
                    $data['multiplier'],
                    $data['dark_theme'],
                    $data['width'],
                    $data['height'],
                    $data['bg_color'],
                    $data['border_color'],
                    $data['updated_at'],
                    $data['show_on_generator']
                );
                $data['image'] = url()->to('storage/' . $item->getBannerPath());

                fputcsv($fp, array_values($data));
            }
        });

        fclose($fp);

        return response()->download($filePath, 'banners.csv', [
            'Content-Type' => 'text/csv',
        ]);
    }

    public function showGenerator(
        Request $request,
        BannerRepository $bannerRepository
    ): RedirectResponse {
        $id = $request->get('id');
        $show = $request->get('show');

        $banner = $bannerRepository->getById($id);

        if (empty($banner)) {
            abort(404);
        }

        $banner->show_on_generator = $show;
        $banner->save();

        return redirect()->back();
    }
}
