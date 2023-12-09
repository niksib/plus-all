<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Contracts\CRUDLangController;
use App\Services\ViewBlock\Models\ViewBlock;
use App\Services\ViewBlock\Models\ViewBlockLang;
use App\Services\ViewBlock\Repositories\ViewBlockCRUDRepository;

class ViewBlockLangController extends CRUDLangController
{
    public function __construct() {
        $this->CRUDRepository = new ViewBlockCRUDRepository();
        $this->item = new ViewBlock();
        $this->itemLangs = new ViewBlockLang();
        $this->routeId = 'view_block';
        $this->routeGroup = 'view-block';
        $this->viewGroup = 'ViewBlock';
    }
}
