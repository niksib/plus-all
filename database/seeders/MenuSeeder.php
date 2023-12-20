<?php

namespace Database\Seeders;

use App\Services\Menu\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $viewBlocks = [
            'header' => [
                [
                    'en' => [],
                    'uk' => [
                        'title' => 'Головна',
                        'url' => '/#home',
                    ]
                ],
                [
                    'en' => [],
                    'uk' => [
                        'title' => 'Про проєкт',
                        'url' => '/#about',
                    ]
                ],
                [
                    'en' => [],
                    'uk' => [
                        'title' => 'Маніфест',
                        'url' => '/#manifest',
                    ]
                ],
                [
                    'en' => [],
                    'uk' => [
                        'title' => 'Як це працює',
                        'url' => '/#how-work',
                    ]
                ],
                [
                    'en' => [],
                    'uk' => [
                        'title' => 'Преспак',
                        'url' => '/#presspack',
                    ]
                ]
            ],
            'footer' => [
                [
                    'en' => [],
                    'uk' => [
                        'title' => 'Головна',
                        'url' => '/#home',
                    ]
                ],
                [
                    'en' => [],
                    'uk' => [
                        'title' => 'Про проєкт',
                        'url' => '/#about',
                    ]
                ],
                [
                    'en' => [],
                    'uk' => [
                        'title' => 'Маніфест',
                        'url' => '/#manifest',
                    ]
                ],
                [
                    'en' => [],
                    'uk' => [
                        'title' => 'Як це працює',
                        'url' => '/#how-work',
                    ]
                ],
                [
                    'en' => [],
                    'uk' => [
                        'title' => 'Преспак',
                        'url' => '/#presspack',
                    ]
                ]
            ]
        ];

        foreach ($viewBlocks as $group => $groupItems) {
            foreach ($groupItems as $position => $itemTranslations) {
                $menu = Menu::query()->firstOrCreate(
                    [
                        'group' => $group,
                        'sorting_position' => $position,
                    ],
                    [
                        'status' => true
                    ]
                );

                foreach ($itemTranslations as $lang => $menuData) {
                    $menu->langs()->updateOrCreate(
                        [
                            'lang' => $lang,
                        ],
                        [
                            'menu_id' => $menu->id,
                            'lang' => $lang,
                            'title' => $menuData['title'] ?? null,
                            'url' => $menuData['url'] ?? null,
                        ]
                    );
                }
            }
        }
    }
}
