<?php

namespace App\Http\Middleware\Site;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user() &&  auth()->user()->is_blocked == 1){
            Auth::guard()->logout();
            return redirect()->route('showLogin')->with('error', __('site.banned_by_the_admin'));
        }
        else

        {
            return $next($request);
        }
    }
}
