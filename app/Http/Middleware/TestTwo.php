<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestTwo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $r = $next($request);

        if($request->id == 1 )
        {
           
            return redirect('/');
        }

        return $r;
    }
}
