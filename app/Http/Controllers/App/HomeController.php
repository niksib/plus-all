<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Services\Link\Repositories\LinkFrontRepository;
use App\Services\Setting\Repositories\SettingFrontRepository;
use App\Services\Slider\Repositories\SliderFrontRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(
        SliderFrontRepository $sliderFrontRepository,
        SettingFrontRepository $settingFrontRepository,
        LinkFrontRepository $linkFrontRepository
    ): Factory|View|Application {
        $storiesSlider = $sliderFrontRepository->getActiveSliderByUid('home-stories');
        $homeVideo = $settingFrontRepository->get('home.video');
        $partners = $linkFrontRepository->getActiveLinksByGroup('partners');

        view()->share('bodyId', 'home');

        return view('app.home', [
            'storiesSlider' => $storiesSlider,
            'homeVideo' => $homeVideo,
            'partners' => $partners
        ]);
    }
}
