<?php

namespace App\Http\Middleware;

use Closure;
use Cart;

class GetInfoCart
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
        $count = Cart::count();
        $total = Cart::total();
        view()->share(['count'=>$count,'total'=>$total]);
        return $next($request);
    }
}
