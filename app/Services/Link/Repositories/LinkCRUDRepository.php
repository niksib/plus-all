<?php

namespace App\Services\Link\Repositories;

use App\Services\Basic\Repositories\CRUDLangRepository;
use App\Services\Link\Models\Link;
use App\Services\Link\Models\LinkLang;

class LinkCRUDRepository extends CRUDLangRepository
{
    public function __construct()
    {
        parent::__construct();

        $this->model = new Link();
        $this->modelLang = new LinkLang();
        $this->parentColumn = 'link_id';
        $this->imagesPath = 'images/links';
    }
}
