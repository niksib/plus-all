<?php

namespace App\Services\Slider\Repositories;

use App\Services\Slider\Models\Slider;

class SliderFrontRepository
{
    public function getActiveSliderByUid(string $uid): ?Slider
    {
        return Slider::with('lang')
            ->where('status', Slider::STATUS_ACTIVE)
            ->where('uid', $uid)
            ->first();
    }
}
