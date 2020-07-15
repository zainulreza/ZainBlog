<?php

namespace App\Http\Middleware\Author;

use Closure;
use Auth;

class AuthorMiddleware
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
        if (Auth::check() && Auth::user()->role && Auth::user()->role->id == 2)
        {
            return $next($request);

        } else {

            return redirect()->route('login');
        }
    }
}
