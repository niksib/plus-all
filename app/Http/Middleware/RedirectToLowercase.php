<?php

namespace App\Http\Middleware;

use Closure;

class RedirectToLowercase
{
    public function handle($request, Closure $next) {
        $path = $request->path();
        if (str_contains($path, 'storage/')) {
            return $next($request);
        }

        $pathLowercase = mb_strtolower($path);
        if ($path !== $pathLowercase) {
            return redirect($pathLowercase);
        }

        return $next($request);
    }
}
