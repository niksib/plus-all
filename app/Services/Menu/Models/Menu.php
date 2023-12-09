<?php

namespace App\Services\Menu\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Menu extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 0;

    protected $table = 'menu';
    protected $fillable = [
        'group', 'sorting_position', 'status'
    ];

    public function langs(): HasMany
    {
        return $this->hasMany(MenuLang::class, 'menu_id', 'id');
    }

    public function lang(): HasOne
    {
        return $this->hasOne(MenuLang::class, 'menu_id', 'id')
            ->where('lang', LaravelLocalization::getCurrentLocale());
    }

    public function getEmptyData(): array
    {
        return [
            'group' => '',
            'sorting_position' => 1,
            'status' => false
        ];
    }
}
