<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Be van jelentkezve? Az admin szerepköre van?
        if (Auth::check() && Auth::user()->role == 'admin') {
            // Igen
            return $next($request);
        }

        abort(403, 'Nincs jogosultságod az oldal megtekintéséhez.'); //ha nem admin, visszadobjuk 403-as hibával
    }
}

