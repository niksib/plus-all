<?php

namespace App\Services\Lead\Repositories;

use App\Services\Basic\Repositories\CRUDRepository;
use App\Services\Lead\Models\Lead;

class LeadRepository extends CRUDRepository
{
    public function __construct()
    {
        parent::__construct();

        $this->model = new Lead();
    }
}
