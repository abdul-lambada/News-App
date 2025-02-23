<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Http\Middleware\TrimStrings;

use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Laravel\Passport\Http\Middleware\CreateFreshApiToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Middleware\CountNewsView;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Middleware for handling web request
        $middleware->web([
            TrimStrings::class,
            ConvertEmptyStringsToNull::class,
            VerifyCsrfToken::class,
            CountNewsView::class,
        ]);

        // Middleware for handling API request
        $middleware->api([
            CreateFreshApiToken::class,
            'throttle:api',
            SubstituteBindings::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
                // Exception handling configuration
                $exceptions->renderable(function (Throwable $e, $request)
                {
                    // Custom exception handling
                });
    })->create();
