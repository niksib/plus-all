<?php

namespace App\Services\Breadcrumbs;

class BreadcrumbsService
{
    private array $items = [];

    public function addHomeLink(): void
    {
        $this->items[] = [
            'title' => trans('breadcrumbs.home-title'),
            'url' => route('home')
        ];
    }

    public function addLink(string $title, ?string $url = null): void
    {
        $this->items[] = [
            'title' => $title,
            'url' => $url
        ];
    }

    public function addLinksToTemplate(): void
    {
        view()->share('breadcrumbs', $this->items);
    }
}
