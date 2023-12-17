<?php

namespace App\Services\ImageGeneration\Repositories;

use App\Services\ImageGeneration\Models\Banner;

class BannerRepository
{
    public function create(array $data): Banner
    {
        $banner = new Banner();
        $banner->fill($data);

        $banner->save();

        return $banner;
    }

    public function getById(int $id): ?Banner
    {
        return Banner::where('id', $id)->first();
    }
}
