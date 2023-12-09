<?php

namespace App\Services\Setting\Repositories;

use App\Services\Setting\Models\Setting;

class SettingFrontRepository
{
    private array $settings = [];

    public function __construct()
    {
        $settings = Setting::all();

        foreach ($settings as $setting) {
            $this->settings[$setting->key] = match ($setting->type) {
                Setting::TYPE_JSON => json_decode($setting->val, true),
                Setting::TYPE_BOOL => (bool)$setting->val,
                default => $setting->val,
            };
        }
    }

    public function get(string $key, mixed $default = null): mixed
    {
        return $this->settings[$key] ?? $default;
    }
}
