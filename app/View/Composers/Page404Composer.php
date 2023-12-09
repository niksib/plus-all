<?php

namespace App\View\Composers;

use App\Services\Link\Repositories\LinkFrontRepository;
use Illuminate\View\View;

class Page404Composer
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
