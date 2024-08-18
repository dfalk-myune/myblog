<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        // if ($request->input('role') !== 'admin') {
        //     return redirect('/');
        // }
 
        // return $next($request);


        
         
        if (Auth::check() && Auth::user()->isAdmin()) {
            
            return $next($request);
        }
        return redirect(route('welcome'));

    }
}
