<?php

namespace App\Services\ImageGeneration\Repositories;

use App\Services\Basic\Repositories\CRUDRepository;
use App\Services\ImageGeneration\Models\Banner;
use Illuminate\Support\Collection;

class BannerFrontRepository
{
    public function getLatestBanners(int $limit = 10): Collection
    {
        return Banner::query()->limit($limit)->get();
    }
}