<?php

namespace App\Http\Middleware;

use Illuminate\Http\Response;
use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
            // If the current user doesn't have the required role then redirect to home router
            return redirect('home');
            // or show 403 error page
            // return new Response('Forbidden', 403);
        }
        return $next($request);
    }
}
