<?php

use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\ImageGenerationController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localizationRedirect', 'cache.headers:public;max_age=86400;etag']], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/image-generation/generate', [ImageGenerationController::class, 'generate'])->name('image-generation.generate');
    Route::get('/image-generation/banner/{id}', [ImageGenerationController::class, 'banner'])->name('image-generation.banner');
});
