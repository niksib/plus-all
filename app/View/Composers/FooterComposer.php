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
        public MenuFrontRepository $menuFrontRepository,
        public LinkFrontRepository $linkFrontRepository
    ) {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $footerMenu = $this->menuFrontRepository->getActiveMenuItemsByGroup('footer');
        $socialFooter = $this->linkFrontRepository->getActiveLinksByGroup('social-footer');

        $view->with('footerMenu', $footerMenu);
        $view->with('socialFooter', $socialFooter);
    }
}
