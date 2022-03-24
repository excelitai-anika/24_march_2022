<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Country
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
        $array=[
            'bangladesh',
            'thailand',
            'Italy',
            'canada'
        ];

        if (in_array($request->country,$array)) { //this country refers to ?
            return $next($request);  
        }
        
       return redirect()->to('/');
    }
}
