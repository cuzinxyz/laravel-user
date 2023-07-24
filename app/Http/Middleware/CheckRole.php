<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role == 0) {
            // chuyen huong neu nhu role = 0
            dd("You don't have permissions");
        }
        return $next($request);
    }
}
