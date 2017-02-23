<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class LoginCustomer
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
        if(Auth::check()){
            if(Auth::user()->level == 2){
                return $next($request);
            }
        }
        return redirect()->route('getLogin');
    }
}
