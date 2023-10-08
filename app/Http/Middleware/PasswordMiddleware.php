<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PasswordMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->password) {
            return to_route('profile.password');
        }

        return $next($request);
    }
}
