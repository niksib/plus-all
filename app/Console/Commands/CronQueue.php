<?php

namespace App\Console\Commands;

use App\Services\CronJob\Models\CronJob;
use App\Services\Translation\Services\GoogleSheetTranslatorService;
use Illuminate\Console\Command;

class CronQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cron:queue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Simple realization of queue';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $googleTranslationService = new GoogleSheetTranslatorService();
        $googleTranslationService->syncTranslation();

        $job = CronJob::where('status', CronJob::STATUS_IN_QUEUE)->first();

        if (empty($job)) {
            return Command::SUCCESS;
        }

        try {
            if ($job->action === 'translation-sync') {
                $googleTranslationService = new GoogleSheetTranslatorService();
                $googleTranslationService->syncTranslation();
            }

            $job->status = CronJob::STATUS_COMPLETED;
        } catch (\Exception $exception) {
            $job->status = CronJob::STATUS_FAILED;
        }

        $job->save();

        return Command::SUCCESS;
    }
}
