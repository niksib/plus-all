<?php

namespace App\Services\ViewBlock\Repositories;

use App\Services\Basic\Repositories\CRUDLangRepository;
use App\Services\ViewBlock\Models\ViewBlock;
use App\Services\ViewBlock\Models\ViewBlockLang;

class ViewBlockCRUDRepository extends CRUDLangRepository
{
    public function __construct()
    {
        parent::__construct();

        $this->model = new ViewBlock();
        $this->modelLang = new ViewBlockLang();
        $this->parentColumn = 'view_block_id';
        // $this->imagesPath = 'images/view-block';
    }
}
