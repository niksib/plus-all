<?php

namespace App\Services\Link\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Link extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 0;

    protected $fillable = [
        'image', 'status', 'group', 'sorting_position', 'nofollow'
    ];

    public function langs(): HasMany
    {
        return $this->hasMany(LinkLang::class, 'link_id', 'id');
    }

    public function lang(): HasOne
    {
        return $this->hasOne(LinkLang::class, 'link_id', 'id')
            ->where('lang', LaravelLocalization::getCurrentLocale());
    }

    protected $casts = [
        'status' => 'boolean',
        'nofollow' => 'boolean'
    ];

    public function getEmptyData(): array
    {
        return [
            'image' => '',
            'group' => '',
            'status' => false,
            'sorting_position' => ''
        ];
    }
}
