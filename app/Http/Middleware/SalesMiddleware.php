<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SalesMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($user && $user->role === 'sales' && in_array($request->route()->getName(), ['customer.create', 'customer.edit', 'customer.update', 'customer.destroy'])) {
            return redirect()->route('customer.index'); // Redirect or abort(403) as needed
        }

        return $next($request);
    }
}