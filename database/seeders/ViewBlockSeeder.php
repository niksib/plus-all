<?php

namespace Database\Seeders;

use App\Services\ViewBlock\Models\ViewBlock;
use Illuminate\Database\Seeder;

class ViewBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $viewBlocks = [
            'example' => [
                'en' => [],
                'uk' => [
                    'description' => 'Example',
                    'content' => 'Html content',
                ]
            ]
        ];

        foreach ($viewBlocks as $key => $viewBlockTranslations) {
            $viewBlock = ViewBlock::query()->firstOrCreate(
                [
                    'key' => $key,
                ],
                [
                    'status' => true,
                    'key' => $key,
                ]
            );

            foreach ($viewBlockTranslations as $lang => $viewBlockData) {
                $viewBlock->langs()->updateOrCreate(
                    [
                        'lang' => $lang,
                    ],
                    [
                        'view_block_id' => $viewBlock->id,
                        'lang' => $lang,
                        'description' => $viewBlockData['description'] ?? null,
                        'content' => $viewBlockData['content'] ?? null,
                    ]
                );
            }
        }
    }
}
