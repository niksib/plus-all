<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Contracts\CRUDLangController;
use App\Services\Menu\Models\Menu;
use App\Services\Menu\Models\MenuLang;
use App\Services\Menu\Repositories\MenuCRUDRepository;
use App\Services\Menu\Requests\MenuCreateRequest;
use Inertia\Inertia;
use Inertia\Response;


class MenuLangController extends CRUDLangController
{
    public function __construct()
    {
        $this->CRUDRepository = new MenuCRUDRepository();
        $this->item = new Menu();
        $this->itemLangs = new MenuLang();
        $this->routeId = 'menu';
        $this->routeGroup = 'menu';
        $this->viewGroup = 'Menu';
        $this->createFormRequest = new MenuCreateRequest();
        $this->updateFormRequest = new MenuCreateRequest();
    }

    public function index(): Response
    {
        $groups = request()->get('group');

        if ($groups) {
            if ($groups === 'international-delivery') {
                $groups = ['international-delivery-left', 'international-delivery-right'];
            } else {
                $groups = [$groups];
            }

            $items = $this->CRUDRepository->getPaginatedByGroups($groups);
        } else {
            $items = $this->CRUDRepository->getPaginated();
        }

        return Inertia::render($this->viewGroup . '/List', [
            'items' => $items,
        ]);
    }
}
