<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Contracts\CRUDLangController;
use App\Services\Link\Models\Link;
use App\Services\Link\Models\LinkLang;
use App\Services\Link\Repositories\LinkCRUDRepository;

class LinkLangController extends CRUDLangController
{
    public function __construct() {
        $this->CRUDRepository = new LinkCRUDRepository();
        $this->item = new Link();
        $this->itemLangs = new LinkLang();
        $this->routeId = 'link';
        $this->routeGroup = 'links';
        $this->viewGroup = 'Link';
    }
}
