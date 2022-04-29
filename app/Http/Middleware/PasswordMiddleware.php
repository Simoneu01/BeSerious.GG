<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PasswordMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->password) {
            return to_route('profile.show.password');
        }
        
        return $next($request);
    }
}
