<?php

namespace App\Services\Lead\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'leads';

    protected $fillable = [
        'name', 'email', 'phone'
    ];
}
