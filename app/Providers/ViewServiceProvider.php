<?php

namespace App\Providers;

use App\View\Composers\FooterComposer;
use App\View\Composers\HeaderComposer;
use App\View\Composers\Page404Composer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('layouts.app', HeaderComposer::class);
        View::composer('layouts.app', FooterComposer::class);
        View::composer('layouts.appNoCss', HeaderComposer::class);
        View::composer('layouts.appNoCss', FooterComposer::class);
        View::composer('app.404', Page404Composer::class);
    }
}
