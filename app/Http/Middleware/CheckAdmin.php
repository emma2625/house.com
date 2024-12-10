<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
     /* This code snippet is from a middleware class named `CheckAdmin` in a Laravel application. */
        $user = Auth::user();
        if ($user->role != 'admin') {
           abort(403, "You are unauthorized to carry out this action");
        }
        
        return $next($request);
    }
}
