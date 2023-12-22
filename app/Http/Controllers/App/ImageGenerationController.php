<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Services\ImageGeneration\Repositories\BannerRepository;
use App\Services\ImageGeneration\Services\ImageGenerationService;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ImageGenerationController extends Controller
{
    public function generator(): Factory|View|Application {
        view()->share('bodyId', 'workshop');

        return view('app.image-generator.generator', []);
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
                'dark_theme' => $request->get('dark-theme', '0'),
                'image' => $request->file('image'),
                'width' => $request->get('width'),
                'height' => $request->get('height'),
                'phone' => $request->get('phone'),
                'email' => $request->get('email')
            ];
            $url = $imageGenerationService->generate($data);

            return response()->json([
                'url' => $url
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
}
