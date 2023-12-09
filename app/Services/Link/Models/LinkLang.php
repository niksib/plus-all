<?php

namespace App\Services\Link\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LinkLang extends Model
{
    protected $table = 'links_lang';

    public $timestamps = false;

    protected $fillable = [
        'link_id', 'title', 'url', 'lang'
    ];

    public function getEmptyData(): array
    {
        $data = [];

        $locales = LaravelLocalization::getSupportedLocales();
        foreach ($locales as $locale => $localeData) {
            $data[$locale] = [
                'url' => '',
                'title' => ''
            ];
        }

        return $data;
    }
}
