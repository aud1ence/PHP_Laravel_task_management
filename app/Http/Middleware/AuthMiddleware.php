<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $email = $request->email;
        $password = $request->password;

        if ($email !== '123@gmail.com' || $password !== '123') {
            return redirect()->route('auth.showFormLogin');
        }

        return $next($request);
    }
}
