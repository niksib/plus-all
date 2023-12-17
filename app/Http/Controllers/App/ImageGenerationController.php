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
    public function generate(
        Request $request
    ): JsonResponse {
        try {
            $imageGenerationService = new ImageGenerationService();
            $data = [
                'name' => 'Beres',
                'bg_color' => '#0c47ac',
                'border_color' => '#ffffff',
                'dark_theme' => 0,
                'image' => new UploadedFile(public_path('/images/veres-2.png'), 'veres.png'),
                'width' => '300',
                'height' => '300',
                'phone' => 'phone',
                'email' => 'email'
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
