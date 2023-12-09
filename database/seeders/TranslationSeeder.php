<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'example' => [
                'popup-title' => [
                    'en' => '',
                    'uk' => 'Example'
                ]
            ]
        ];

        foreach ($data as $groupKey => $groupData) {
            foreach ($groupData as $key => $translation) {
                LanguageLine::query()->firstOrCreate([
                    'group' => $groupKey,
                    'key' => $key,
                ],
                [
                    'text' => $translation
                ]);
            }
        }
    }
}
