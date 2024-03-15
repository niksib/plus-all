<?php

namespace App\Services\ImageGeneration\Repositories;

use App\Services\Basic\Repositories\CRUDRepository;
use App\Services\ImageGeneration\Models\Banner;
use Illuminate\Support\Collection;

class BannerFrontRepository
{
    public function getLatestBanners(int $limit = 10): Collection
    {
        return Banner::query()->orderBy('id', 'desc')->limit($limit)->get();
    }

    public function getShowOnGeneratorBanners(): Collection
    {
        return Banner::query()->where('show_on_generator', 1)->get();
    }
}
