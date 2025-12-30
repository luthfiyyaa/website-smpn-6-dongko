<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Application;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please login to access this page.');
        }

        if (auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized access. Admin privileges required.');
        }

        return $next($request);
    }
}

// return Application::configure(basePath: dirname(__DIR__))
//     ->withRouting(
//         web: __DIR__.'/../routes/web.php',
//         commands: __DIR__.'/../routes/console.php',
//         health: '/up',
//     )
//     ->withMiddleware(function ($middleware) {
//         $middleware->alias([
//             'admin' => AdminMiddleware::class,
//         ]);
//     })
//     ->withExceptions(function ($exceptions) {
//         //
//     })
//     ->create();

