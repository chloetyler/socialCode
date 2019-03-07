<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class userAdmin
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
        //if is a user & has role of user admin let them in
        if (Auth::user() && Auth::user()->hasRole('user_administrator')) {

            return $next($request);
        }

        // not, return them to /home
        return redirect('/home');

    }



}
