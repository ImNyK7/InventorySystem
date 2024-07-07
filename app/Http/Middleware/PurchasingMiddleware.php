<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PurchasingMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->role === 'purchasing') {
            return redirect('/');
        }

        return $next($request);
    }
}