<?php

namespace App\Services\Menu\Repositories;

use App\Services\Menu\Models\Menu;
use Illuminate\Support\Collection;

class MenuFrontRepository
{
    public function getActiveMenuItemsByGroup(string $group): Collection
    {
        return Menu::with('lang')
            ->where('group', $group)
            ->where('status', Menu::STATUS_ACTIVE)
            ->orderBy('sorting_position')
            ->get();
    }

    public function getActiveMenuItemsByGroups(array $groups): Collection
    {
        return Menu::with('lang')
            ->whereIn('group', $groups)
            ->where('status', Menu::STATUS_ACTIVE)
            ->orderBy('sorting_position')
            ->get();
    }
}
