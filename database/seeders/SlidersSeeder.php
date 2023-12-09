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
        $sliders = [];

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
