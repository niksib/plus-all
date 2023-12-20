<?php

namespace Database\Seeders;

use App\Services\Setting\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            'home.video' => 'https://www.youtube.com/embed/tgbNymZ7vqY',
        ];

        foreach ($settings as $key => $value) {
            $setting = Setting::query()->firstOrNew(['key' => $key]);

            if ($setting->exists) {
                continue;
            }

            if (is_callable($value)) {
                $value = $value();
            }

            if (is_bool($value)) {
                $setting->val = (int)$value;
            } elseif (is_array($value)) {
                $setting->val = json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            } else {
                $setting->val = (string)$value;
            }

            $setting->type = match (true) {
                is_bool($setting->val) => 'bool',
                in_array(substr(trim($setting->val), 0, 1), ['{', '[']) => 'json',
                default => 'string',
            };

            $setting->save();
        }
    }
}
