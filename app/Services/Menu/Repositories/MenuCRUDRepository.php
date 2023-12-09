<?php

namespace App\Services\Menu\Repositories;

use App\Services\Basic\Repositories\CRUDLangRepository;
use App\Services\Menu\Models\Menu;
use App\Services\Menu\Models\MenuLang;
use Illuminate\Pagination\LengthAwarePaginator;

class MenuCRUDRepository extends CRUDLangRepository
{
    public function __construct()
    {
        parent::__construct();

        $this->model = new Menu();
        $this->modelLang = new MenuLang();
        $this->parentColumn = 'menu_id';
    }

    public function getPaginatedByGroups(array $groups): LengthAwarePaginator
    {
        return $this->model::with(['lang'])
            ->whereIn('group', $groups)
            ->paginate(25);
    }
}
