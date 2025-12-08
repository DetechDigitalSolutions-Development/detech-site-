<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CheckZipExtension;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Register as route middleware alias
        $middleware->alias([
            // 'check.zip' => \App\Http\Middleware\CheckZipExtension::class,
        ]);
        
        // Add to web middleware group
        $middleware->appendToGroup('web', [
            // \App\Http\Middleware\CheckZipExtension::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();