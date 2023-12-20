<?php

namespace Database\Seeders;

use App\Services\File\Services\FileService;
use App\Services\Link\Models\Link;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class LinksSeeder extends Seeder
{
    public function __construct(private FileService $fileService)
    {
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            'partners' => [
                [
                    'image' => 'public/images/1.svg',
                    'langs' => [
                        'en' => [],
                        'uk' => [
                            'title' => 'Міністерство економіки України',
                            'url' => '#',
                        ]
                    ]
                ],
                [
                    'image' => 'public/images/2.svg',
                    'langs' => [
                        'en' => [],
                        'uk' => [
                            'title' => 'Prozorro',
                            'url' => '#',
                        ]
                    ]
                ],
                [
                    'image' => 'public/images/3.svg',
                    'langs' => [
                        'en' => [],
                        'uk' => [
                            'title' => 'USAID',
                            'url' => '#',
                        ]
                    ]
                ],
                [
                    'image' => 'public/images/4.svg',
                    'langs' => [
                        'en' => [],
                        'uk' => [
                            'title' => 'UKAID',
                            'url' => '#',
                        ]
                    ]
                ],
                [
                    'image' => 'public/images/5.svg',
                    'langs' => [
                        'en' => [],
                        'uk' => [
                            'title' => 'Eurasia Foundation',
                            'url' => '#',
                        ]
                    ]
                ]
            ],
            'social-footer' => [
                [
                    'image' => 'public/images/fb-white.svg',
                    'langs' => [
                        'en' => [],
                        'uk' => [
                            'title' => 'prozorro',
                            'url' => '#',
                        ]
                    ]
                ],
                [
                    'image' => 'public/images/inst-white.svg',
                    'langs' => [
                        'en' => [],
                        'uk' => [
                            'title' => 'prozorro',
                            'url' => '#',
                        ]
                    ]
                ],
                [
                    'image' => 'public/images/fb-white.svg',
                    'langs' => [
                        'en' => [],
                        'uk' => [
                            'title' => 'mineconomdev',
                            'url' => '#',
                        ]
                    ]
                ]
            ]
        ];

        foreach ($links as $group => $groupItems) {
            foreach ($groupItems as $position => $item) {
                $link = Link::query()->firstOrCreate(
                    [
                        'group' => $group,
                        'sorting_position' => $position,
                    ],
                    [
                        'image' => $this->fileService->store(
                            new UploadedFile(
                                base_path($item['image']),
                                basename($item['image']),
                                mime_content_type(base_path($item['image']))
                            ),
                            'images/slides'
                        ),
                        'status' => true
                    ]
                );

                foreach ($item['langs'] as $lang => $linkData) {
                    $link->langs()->updateOrCreate(
                        [
                            'lang' => $lang,
                        ],
                        [
                            'link_id' => $link->id,
                            'lang' => $lang,
                            'title' => $linkData['title'] ?? null,
                            'url' => $linkData['url'] ?? null,
                        ]
                    );
                }
            }
        }
    }
}
