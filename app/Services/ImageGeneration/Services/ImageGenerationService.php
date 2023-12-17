<?php

namespace App\Services\ImageGeneration\Services;

use App\Services\File\Services\FileService;
use App\Services\ImageGeneration\Repositories\BannerRepository;
use Spatie\Browsershot\Browsershot;

class ImageGenerationService
{
    public function generate(array $data): string
    {
        $fileService = new FileService();
        $data['image'] = $fileService->store($data['image'], 'images/banners/stickers');

        $bannerRepository = new BannerRepository();
        $banner = $bannerRepository->create($data);

        $bannerPath = str_replace('/stickers', '', $data['image']);
        Browsershot::url(route('image-generation.banner', ['id' => $banner->id]))
            ->newHeadless()
            ->windowSize(1920, 1080)
            ->save($bannerPath);

        return $bannerPath;
    }
}
