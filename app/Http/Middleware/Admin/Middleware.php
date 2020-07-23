<?php

namespace App\Http\Middleware\Admin;

use Closure;

class Middleware
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
        if (Auth::check() && Auth::user()->role->id ==1)
        {

            return $next($request);

        }else {

            return redirect()->route( route, 'login');
        }
    }    
}
