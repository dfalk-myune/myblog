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
        return $next($request);
        // if (Auth::check() && Auth::user()->is_admin){
        //     return $next($request);
        // }
        // return redirect('/')->with('error','you do not have admin access.');

        // Check if the user is authenticated and is an admin
        if (Auth::check() && Auth::user()->isAdmin()) {
            // Allow the request to proceed
            dd("we have an admin");
            return $next($request);
        }

        //dd("not an admin !!!");

        // If the user is not an admin, redirect to home with an error message
        return redirect('/')->with('error', 'You do not have admin access.');

    }
}
