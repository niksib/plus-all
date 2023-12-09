<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'layouts.admin';

    /**
     * Determine the current asset version.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $user->permissions = $user->getPermissionsViaRoles()->map(fn($item) => $item->name);
        }

        return array_merge(parent::share($request), [
            'languages' => LaravelLocalization::getSupportedLocales(),
            'auth' => [
                'user' => $user
            ],
            'ziggy' => function () {
                return (new Ziggy)->toArray();
            },
            'flash' => [
                'message' => [
                    'text' => $request->session()->get('message.text'),
                    'status' => $request->session()->get('message.status')
                ]
            ],
        ]);
    }
}
