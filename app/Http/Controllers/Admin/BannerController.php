<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Contracts\CRUDController;
use App\Services\ImageGeneration\Models\Banner;
use App\Services\ImageGeneration\Repositories\BannerRepository;
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
        fputcsv($fp, ['ID', 'Назва', 'Банер', 'Email', 'Телефон', 'Дата', 'Продукт']);
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
                    $data['updated_at']
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
}
