<?php

namespace App\Services\SeoRule\Repositories;

use App\Services\SeoRule\Models\SeoRule;

class SeoRuleFrontRepository
{
    public function getActiveSeoRuleByUrl(string $url): ?SeoRule
    {
        return SeoRule::with('lang')
            ->where('url', $url)
            ->where('status', SeoRule::STATUS_ACTIVE)
            ->first();
    }
}
