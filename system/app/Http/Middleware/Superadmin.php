<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Superadmin
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
        if(isset(Auth()->User()->level)){
            if(Auth()->User()->level !== "superadmin"){
                abort(404);
            }
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
