<?php

namespace App\Services\Slider\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Slider extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 0;

    protected $table = 'sliders';
    protected $fillable = [
        'uid', 'name', 'images', 'status'
    ];

    public function langs(): HasMany
    {
        return $this->hasMany(SliderLang::class, 'slider_id', 'id');
    }

    public function lang(): HasOne
    {
        return $this->hasOne(SliderLang::class, 'slider_id', 'id')
            ->where('lang', LaravelLocalization::getCurrentLocale());
    }

    protected $casts = [
        'status' => 'boolean',
        'images' => 'array'
    ];

    public function getEmptyData(): array
    {
        return [
            'uid' => '',
            'name' => '',
            'images' => [],
            'status' => false
        ];
    }
}
