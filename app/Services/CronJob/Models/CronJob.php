<?php

namespace App\Services\CronJob\Models;

use Illuminate\Database\Eloquent\Model;

class CronJob extends Model
{
    const STATUS_IN_QUEUE = 1;
    const STATUS_COMPLETED = 2;
    const STATUS_FAILED = 3;

    protected $fillable = [
        'action', 'data', 'status', 'error_message'
    ];
}
