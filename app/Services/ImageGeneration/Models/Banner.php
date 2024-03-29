<?php

namespace App\Services\ImageGeneration\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = [
        'name', 'multiplier', 'bg_color', 'dark_theme', 'image',
        'width', 'height', 'phone', 'email', 'company', 'edrpoy', 'company_rep'
    ];

    public function getBannerPath(): string
    {
        return str_replace('/stickers', '', $this->image);
    }
}
