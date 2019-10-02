<?php

namespace App\Http\Middleware;

use Closure;

class IndividualUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard='individual_user')
    {
        if(!auth()->guard($guard)->check())
        {
            return redirect('/individual_user/home');
        }
        return $next($request);
    }
}
