<?php

namespace App\Services\ViewBlock\Repositories;

use App\Services\ViewBlock\Models\ViewBlock;
use Illuminate\Support\Collection;

class ViewBlockFrontRepository
{
    public function getActiveViewBlocks(): Collection
    {
        return ViewBlock::with('lang')
            ->where('status', ViewBlock::STATUS_ACTIVE)
            ->get();
    }

    public function getActiveViewBlockByKey(string $key): ViewBlock
    {
        return ViewBlock::with('lang')
            ->where('key', $key)
            ->where('status', ViewBlock::STATUS_ACTIVE)
            ->first();
    }

    public function getActiveViewBlockByKeys(array $keys): Collection
    {
        return ViewBlock::with('lang')
            ->whereIn('key', $keys)
            ->where('status', ViewBlock::STATUS_ACTIVE)
            ->get();
    }

    public function getViewBlockByKey(string $key): ViewBlock
    {
        return ViewBlock::with('lang')
            ->where('key', $key)
            ->first();
    }
}
