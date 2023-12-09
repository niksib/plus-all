<?php

namespace App\Services\Translation\Models;


class LanguageLine extends \Spatie\TranslationLoader\LanguageLine
{
    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
