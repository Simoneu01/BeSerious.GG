<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HavePasswordMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (is_null(auth()->user()->password)) {
            return to_route('profile.show.new-password');
        }

        return $next($request);
    }
}
