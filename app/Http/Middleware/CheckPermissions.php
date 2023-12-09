<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;

class CheckPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $currentRoute = $request->route()->getName();
        $user = auth()->user();

        try {
            if (!$user->hasPermissionTo($currentRoute)) {
                abort(403, 'You don\'t have permissions to this section.');
            }
        } catch (Exception $exception) {
            abort(403, 'You don\'t have permissions to this section.');
        }

        return $next($request);
    }
}
