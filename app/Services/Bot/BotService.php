<?php

namespace App\Services\Bot;

class BotService
{
    public const GOOGLE_PAGE_SPEED_INSIGHTS_BOT = 'Chrome-Lighthouse';

    public static function isSelectedBot(string $botName): bool
    {
        $agent = $_SERVER['HTTP_USER_AGENT'] ?? null;

        if ($agent && str_contains($agent, $botName)) {
            return true;
        }

        return false;
    }
}
