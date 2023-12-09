<?php

namespace App\View\Components;

use App\Services\Bot\BotService;
use Illuminate\View\Component;

class AppNoCssLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $isGoogleBot = BotService::isSelectedBot(BotService::GOOGLE_PAGE_SPEED_INSIGHTS_BOT);

        return view('layouts.appNoCss', [
            'isGoogleBot' => $isGoogleBot
        ]);
    }
}
