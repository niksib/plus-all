<?php

namespace App\Services\Slider\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SliderLang extends Model
{
    protected $table = 'sliders_lang';

    public $timestamps = false;

    protected $fillable = [
        'slider_id', 'content', 'lang'
    ];

    protected $casts = [
        'content' => 'array'
    ];

    public function getEmptyData(): array
    {
        $data = [];

        $locales = LaravelLocalization::getSupportedLocales();
        foreach ($locales as $locale => $localeData) {
            $data[$locale] = [
                'content' => []
            ];
        }

        return $data;
    }
}
