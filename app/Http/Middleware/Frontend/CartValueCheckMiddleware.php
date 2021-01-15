<?php

namespace App\Http\Middleware\Frontend;

use Closure;
use Cart;

class CartValueCheckMiddleware
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
        if(!Cart::getSubTotal())
        {
            return redirect('/shop/view')->with('info', 'Your Cart is Empty! Please Add An New Item Now!');
        }
        return $next($request);
    }
}
