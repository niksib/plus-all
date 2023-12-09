<?php

namespace App\Services\Link\Repositories;

use App\Services\Link\Models\Link;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class LinkFrontRepository
{
    public function getActiveLinksByGroup(string $group): Collection
    {
        return Link::with('lang')
            ->where('group', $group)
            ->where('status', Link::STATUS_ACTIVE)
            ->orderBy('sorting_position')
            ->get();
    }

    public function getLastUpdated(): ?Carbon
    {
        return Link::select('updated_at')
            ->where('status', Link::STATUS_ACTIVE)
            ->orderBy('updated_at', 'desc')
            ->first()?->updated_at;
    }

    public function getById(mixed $appStoreLinkId): ?Link
    {
        return Link::with('lang')
            ->where('id', $appStoreLinkId)
            ->where('status', Link::STATUS_ACTIVE)
            ->first();
    }
}
