<?php

namespace App\Services\SeoRule\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SeoRuleLang extends Model
{
    protected $table = 'seo_rules_lang';

    public $timestamps = false;

    protected $fillable = [
        'seo_rule_id', 'meta_title', 'meta_description', 'meta_keywords', 'social_name', 'social_image',
        'social_link', 'social_description', 'social_site_name', 'lang'
    ];

    public function getEmptyData(): array
    {
        $data = [];

        $locales = LaravelLocalization::getSupportedLocales();
        foreach ($locales as $locale => $localeData) {
            $data[$locale] = [
                'meta_title' => '',
                'meta_description' => '',
                'meta_keywords' => '',
                'social_name' => '',
                'social_image' => '',
                'social_link' => '',
                'social_description' => '',
                'social_site_name' => ''
            ];
        }

        return $data;
    }
}
