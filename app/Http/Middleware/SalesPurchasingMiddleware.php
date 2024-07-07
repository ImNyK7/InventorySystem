<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SalesPurchasingMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if ($user && ($user->role === 'sales' || $user->role === 'purchasing')) {
            if ($request->isMethod('get') || $request->isMethod('head')) {
                return $next($request);
            }
            return abort(403, 'Akses Ini Tidak Bisa Dilakukan Dengan Role Anda.');
        }

        return $next($request);
    }
}
