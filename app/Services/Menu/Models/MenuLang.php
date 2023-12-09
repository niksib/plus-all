<?php

namespace App\Services\Menu\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class MenuLang extends Model
{
    protected $table = 'menu_lang';

    public $timestamps = false;

    protected $fillable = [
        'title', 'url', 'child', 'lang', 'menu_id'
    ];

    protected $casts = [
        'child' => 'array'
    ];

    public function getEmptyData(): array
    {
        $data = [];

        $locales = LaravelLocalization::getSupportedLocales();
        foreach ($locales as $locale => $localeData) {
            $data[$locale] = [
                'title' => '',
                'url' => '',
                'child' => []
            ];
        }

        return $data;
    }
}
