<?php

namespace App\Services\Setting\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $key
 * @property string $val
 * @property string $type
 */
class Setting extends Model
{
    public const TYPE_STRING = 'string';
    public const TYPE_JSON = 'json';
    public const TYPE_BOOL = 'bool';

    protected $table = 'settings';
    protected $fillable = [
        'key', 'val', 'type'
    ];

    public function getEmptyData(): array
    {
        return [
            'key' => '',
            'val' => '',
            'type' => self::TYPE_STRING,
        ];
    }
}
