<?php

namespace App\View\Composers;

use App\Services\Link\Repositories\LinkFrontRepository;
use App\Services\Menu\Repositories\MenuFrontRepository;
use App\Services\Setting\Repositories\SettingFrontRepository;
use Illuminate\View\View;

class FooterComposer
{
    /**
     * Create a new profile composer.
     */
    public function __construct(
    ) {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {

    }
}
