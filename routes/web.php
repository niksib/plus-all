<?php

use App\Http\Controllers\App\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localizationRedirect', 'cache.headers:public;max_age=86400;etag']], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});
