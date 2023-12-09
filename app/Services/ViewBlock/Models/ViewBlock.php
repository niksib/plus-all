<?php

namespace App\Services\ViewBlock\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ViewBlock extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 0;

    protected $fillable = [
        'status', 'key'
    ];

    public function langs(): HasMany
    {
        return $this->hasMany(ViewBlockLang::class, 'view_block_id', 'id');
    }

    public function lang(): HasOne
    {
        return $this->hasOne(ViewBlockLang::class, 'view_block_id', 'id')
            ->where('lang', LaravelLocalization::getCurrentLocale());
    }

    protected $casts = [
        'status' => 'boolean'
    ];

    public function getEmptyData(): array
    {
        return [
            'status' => false,
            'key' => ''
        ];
    }
}
