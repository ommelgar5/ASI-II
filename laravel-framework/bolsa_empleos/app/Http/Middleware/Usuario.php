<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Usuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == '2') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == '1') {
            return redirect('/gestor/dashboard');
        }
        else {
            return redirect('/');
        }
    }
}
