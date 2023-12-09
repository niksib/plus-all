<?php

namespace App\Services\ViewBlock\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ViewBlockLang extends Model
{
    protected $table = 'view_blocks_lang';

    public $timestamps = false;

    protected $fillable = [
        'view_block_id', 'description', 'content', 'lang'
    ];

    public function getEmptyData(): array
    {
        $data = [];

        $locales = LaravelLocalization::getSupportedLocales();
        foreach ($locales as $locale => $localeData) {
            $data[$locale] = [
                'description',
                'content' => ''
            ];
        }

        return $data;
    }
}
