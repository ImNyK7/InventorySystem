<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\SalesMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'sales.readonly' => \App\Http\Middleware\SalesViewOnlyMiddleware::class,
        'purchasing.readonly' => \App\Http\Middleware\PurchasingViewOnlyMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
