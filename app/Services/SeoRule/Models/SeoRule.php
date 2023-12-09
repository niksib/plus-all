<?php

namespace App\Services\SeoRule\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SeoRule extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 0;

    protected $table = 'seo_rules';

    protected $fillable = [
        'status', 'url'
    ];

    public function langs(): HasMany
    {
        return $this->hasMany(SeoRuleLang::class, 'seo_rule_id', 'id');
    }

    public function lang(): HasOne
    {
        return $this->hasOne(SeoRuleLang::class, 'seo_rule_id', 'id')
            ->where('lang', LaravelLocalization::getCurrentLocale());
    }

    protected $casts = [
        'status' => 'boolean'
    ];

    public function getEmptyData(): array
    {
        return [
            'url' => '',
            'status' => false
        ];
    }
}
