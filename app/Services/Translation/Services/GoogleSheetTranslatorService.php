<?php

namespace App\Services\Translation\Services;

use App\Services\Google\Services\GoogleSheetService;
use App\Services\Translation\Models\LanguageLine;
use Illuminate\Support\Facades\Cache;

class GoogleSheetTranslatorService
{
    const TRANSLATION_SHEET_ID = '1eszLgQAqKBMVbchI7-Zn50_wwntTtmYgxbblbgoAdwI';

    public function syncTranslation(): void
    {
        $googleSheetService = new GoogleSheetService();
        $start = 2;
        $end = 101;

        while ($translations = $googleSheetService->getFromSheet(
            self::TRANSLATION_SHEET_ID,
            "Translation!A$start:C$end"
        )) {
            $values = $translations->getValues();
            if ($values === null) {
                break;
            }

            foreach ($values as $value) {
                if (empty($value[0])) {
                    continue;
                }

                $translationKey = explode('.', $value[0]);
                if (empty($translationKey[0]) || empty($translationKey[1])) {
                    continue;
                }

                $group = $translationKey[0];
                $key = $translationKey[1];

                $languageLine = LanguageLine::query()
                    ->where('group', $group)
                    ->where('key', $key)
                    ->first();

                if (empty($languageLine)) {
                    $languageLine = new LanguageLine();
                    $languageLine->group = $group;
                    $languageLine->key = $key;
                }

                $languageLine->text = [
                    'en' => $value[1] ?? '',
                    'uk' => $value[2] ?? ''
                ];

                $languageLine->save();

                $languageLine->flushGroupCache();
            }

            $start += 100;
            $end += 100;
        }

        Cache::flush();
    }
}
