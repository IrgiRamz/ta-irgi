<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Checkrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {

        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect('/login');
        }

        // Check if the user has the required role
        if (!in_array(auth()->user()->role, $roles)) {
            //abort(403, 'Unauthorized action.');
            return redirect('/access-denied');
        }

        return $next($request);
    }
}
