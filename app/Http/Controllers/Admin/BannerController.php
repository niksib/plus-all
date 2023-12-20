<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Contracts\CRUDController;
use App\Services\ImageGeneration\Models\Banner;
use App\Services\ImageGeneration\Repositories\BannerRepository;

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
}
