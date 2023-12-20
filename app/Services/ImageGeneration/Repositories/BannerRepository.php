<?php

namespace App\Services\ImageGeneration\Repositories;

use App\Services\Basic\Repositories\CRUDRepository;
use App\Services\ImageGeneration\Models\Banner;

class BannerRepository extends CRUDRepository
{
    public function __construct()
    {
        parent::__construct();

        $this->model = new Banner();
    }
}
