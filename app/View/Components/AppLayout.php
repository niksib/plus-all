<?php

namespace App\View\Components;

use App\Services\Bot\BotService;
use App\Services\ViewBlock\Repositories\ViewBlockFrontRepository;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $viewBlockRepository = new ViewBlockFrontRepository();

        $isGoogleBot = BotService::isSelectedBot(BotService::GOOGLE_PAGE_SPEED_INSIGHTS_BOT);
        $downloadModalInfo = $viewBlockRepository->getActiveViewBlockByKey('download-modal-info');

        return view('layouts.app', [
            'isGoogleBot' => $isGoogleBot,
            'downloadModalInfo' => $downloadModalInfo
        ]);
    }
}
