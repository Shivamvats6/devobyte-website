<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Not logged in → login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Logged in but not admin → 403
        if (!Auth::user()->is_admin) {
            abort(403);
        }

        return $next($request);
    }
}
