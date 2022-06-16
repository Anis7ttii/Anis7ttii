<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class FormAuth 
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
        if(!Session()->has('loginId')){
            return redirect('loginn')->with('failed','You have to loginn first');
            

        }
        return $next($request);
        
    }
}
