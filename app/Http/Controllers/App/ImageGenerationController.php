<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageGenerationRequest;
use App\Http\Requests\LeadDowloadRequest;
use App\Services\ImageGeneration\Repositories\BannerFrontRepository;
use App\Services\ImageGeneration\Repositories\BannerRepository;
use App\Services\ImageGeneration\Services\ImageGenerationService;
use App\Services\Lead\Repositories\LeadRepository;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ImageGenerationController extends Controller
{
    public function generator(BannerFrontRepository $bannerFrontRepository): Factory|View|Application {
        view()->share('bodyId', 'workshop');

        $banners = $bannerFrontRepository->getShowOnGeneratorBanners();

        return view('app.image-generator.generator', [
            'banners' => $banners
        ]);
    }

    public function generate(
        Request $request
    ): JsonResponse {
        try {
            $imageGenerationService = new ImageGenerationService();
            $data = [
                'name' => $request->get('name'),
                'bg_color' => $request->get('bg-color'),
                'border_color' => $request->get('border-color'),
                'dark_theme' => $request->get('dark-theme', 'off') == 'on' ? 1 : 0,
                'image' => $request->file('image'),
                'width' => $request->get('width'),
                'height' => $request->get('height'),
                'phone' => $request->get('phone'),
                'email' => $request->get('email'),
                'company' => $request->get('product-name')
            ];
            $url = $imageGenerationService->generate($data);

            return response()->json([
                'url' => url('/storage/' . $url)
            ]);
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage()
            ], 500);
        }
    }

    public function banner(
        int $id,
        BannerRepository $bannerRepository
    ): Factory|View|Application {
        $banner = $bannerRepository->getById($id);

        if (empty($banner)) {
            abort(404);
        }

        return view('app.image-generator.banner', [
            'banner' => $banner
        ]);
    }

    public function download(LeadDowloadRequest $request): JsonResponse
    {
        try {
            $leadRepository = new LeadRepository();

            $leadRepository->create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone
            ]);

            return response()->json([
                'downloadUrl' => trans('modal-download.url-for-download')
            ]);
        } catch (Exception $exception) {
            return response()->json([
                'error' => $exception->getMessage()
            ]);
        }
    }
}
