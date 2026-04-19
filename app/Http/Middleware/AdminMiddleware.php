<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // 🔐 protection simple (version portfolio)
        if (!session()->has('admin_logged_in')) {
            abort(403, 'Accès refusé');
        }

        return $next($request);
    }
}