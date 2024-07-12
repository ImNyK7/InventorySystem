<?php

// app/Http/Middleware/SalesReadOnlyMiddleware.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SalesViewOnlyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->role === 'sales') {
            if ($request->isMethod('post') || $request->isMethod('put') || $request->isMethod('patch') || $request->isMethod('delete')) {
                return abort(403, 'Akses Ini Tidak Bisa Dilakukan Dengan Role Anda.');
            }
        }
        return $next($request);
    }
}


