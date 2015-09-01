<?php

namespace CodeCommerce\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateUser
{
    public function handle($request, Closure $next)
    {
        if (Auth::user() == null) {
            return redirect()->guest('auth/login');
        }
        return $next($request);
    }
}
