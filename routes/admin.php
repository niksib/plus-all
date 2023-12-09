<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\FileManagerController;
use App\Http\Controllers\Admin\SeoRuleLangController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ViewBlockLangController;
use App\Http\Controllers\Admin\LinkLangController;
use App\Http\Controllers\Admin\MenuLangController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

Route::middleware(['auth', 'verified', 'permissions'])
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return Inertia::render('Dashboard');
        })->name('dashboard');

        Route::resource('users',UserController::class)->except(['show']);
        Route::resource('roles', RoleController::class)->except(['show']);
        Route::resource('translations', TranslationController::class)->except(['show']);
        Route::resource('sliders', SliderController::class)->except(['show']);
        Route::get('/sliders/by-uid/{uid}/edit', [SliderController::class, 'editByUid'])->name('sliders.edit-by-uid');
        Route::resource('menu', MenuLangController::class)->except(['show']);
        Route::resource('links', LinkLangController::class)->except(['show']);
        Route::resource('view-block', ViewBlockLangController::class)->except(['show']);
        Route::resource('seo-rule', SeoRuleLangController::class)->except(['show']);
        Route::resource('settings', SettingController::class)->except(['show']);
        Route::get('/translations/google-sync', [TranslationController::class, 'googleSheetSync'])->name('translations.sync');

        Route::get('/file-manager', [FileManagerController::class, 'index'])->name('file-manager');
    });
