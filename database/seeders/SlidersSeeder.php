<?php

namespace Database\Seeders;

use App\Services\File\Services\FileService;
use App\Services\Slider\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;

class SlidersSeeder extends Seeder
{
    private FileService $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = [
            'home-stories' => [
                'name' => 'Слайдер сторіс на головній',
                'lang' => [
                    'uk' => [
                        [
                            'id' => '1',
                            'title' => 'Коли купуєш український сир — плюсуєш своє*',
                            'subtitle' => 'Бо 70% від вартості твердого сиру повертається в країну',
                        ],
                        [
                            'id' => '2',
                            'title' => 'Коли купуєш український ковбасу — плюсуєш своє*',
                            'subtitle' => 'Бо 65% від вартості ковбасних виробів повертається в країну',
                        ],
                        [
                            'id' => '3',
                            'title' => 'Коли купуєш український одяг — плюсуєш своє*',
                            'subtitle' => 'Бо 27% від вартості товару повертається в країну',
                        ],
                        [
                            'id' => '4',
                            'title' => 'Коли купуєш українську плитку — плюсуєш своє*',
                            'subtitle' => 'Бо 59% від вартості товару повертається в країну',
                        ],
                        [
                            'id' => '5',
                            'title' => 'Коли купуєш українську воду — плюсуєш своє*',
                            'subtitle' => 'Бо до 40% від вартості води повертається в країну',
                        ],
                        [
                            'id' => '6',
                            'title' => 'Коли купуєш українську косметику — плюсуєш своє*',
                            'subtitle' => 'Бо 40% від вартості товару повертається в країну',
                        ],
                    ],
                    'en' => [
                        [
                            'id' => '1',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '2',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '3',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '4',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '5',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '6',
                            'title' => '',
                            'subtitle' => '',
                        ]
                    ],
                ],
                'status' => 1,
                'images' => [
                    'public/images/slides/s0.png',
                    'public/images/slides/s1.png',
                    'public/images/slides/s2.png',
                    'public/images/slides/s3.png',
                    'public/images/slides/s4.png',
                    'public/images/slides/s5.png'
                ],
            ],
            'home-endless-line-1' => [
                'name' => 'Слайдер лінія 1 на головній',
                'lang' => [
                    'uk' => [
                        [
                            'id' => '1',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '2',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '3',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '4',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '5',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '6',
                            'title' => '',
                            'subtitle' => '',
                        ]
                    ],
                    'en' => [
                        [
                            'id' => '1',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '2',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '3',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '4',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '5',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '6',
                            'title' => '',
                            'subtitle' => '',
                        ]
                    ],
                ],
                'status' => 1,
                'images' => [
                    'public/images/scrollbaner1/img1.png',
                    'public/images/scrollbaner1/img2.png',
                    'public/images/scrollbaner1/img3.png',
                    'public/images/scrollbaner1/img4.png',
                    'public/images/scrollbaner1/img5.png',
                ],
            ],
            'home-endless-line-2' => [
                'name' => 'Слайдер лінія 2 на головній',
                'lang' => [
                    'uk' => [
                        [
                            'id' => '1',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '2',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '3',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '4',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '5',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '6',
                            'title' => '',
                            'subtitle' => '',
                        ]
                    ],
                    'en' => [
                        [
                            'id' => '1',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '2',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '3',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '4',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '5',
                            'title' => '',
                            'subtitle' => '',
                        ],
                        [
                            'id' => '6',
                            'title' => '',
                            'subtitle' => '',
                        ]
                    ],
                ],
                'status' => 1,
                'images' => [
                    'public/images/scrollbaner2/img1.png',
                    'public/images/scrollbaner2/img2.png',
                    'public/images/scrollbaner2/img3.png',
                    'public/images/scrollbaner2/img4.png',
                    'public/images/scrollbaner2/img5.png',
                ],
            ],
        ];

        foreach ($sliders as $uid => $sliderData) {
            $images = [];
            foreach ($sliderData['images'] as $image) {
                $images[] = $this->fileService->store(
                    new UploadedFile(
                        base_path($image),
                        basename($image),
                        mime_content_type(base_path($image))
                    ),
                    'images/slides'
                );
            }

            $slider = Slider::query()->firstOrCreate(
                [
                    'uid' => $uid,
                ],
                [
                    'name' => $sliderData['name'],
                    'status' => $sliderData['status'] ?? 1,
                    'images' => $images,
                ]
            );

            foreach ($sliderData['lang'] as $lang => $sliderLangData) {
                $slider->langs()->firstOrCreate(
                    [
                        'lang' => $lang,
                    ],
                    [
                        'slider_id' => $slider->id,
                        'lang' => $lang,
                        'content' => $sliderLangData,
                    ]
                );
            }
        }
    }

}
