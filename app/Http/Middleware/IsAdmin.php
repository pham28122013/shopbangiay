<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\User;

class IsAdmin
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
        if (Auth::user()->role_id == User::ROLE['ADMIN'] || Auth::user()->role_id == User::ROLE['SUB_ADMIN']) {
            return $next($request);
        }
        return redirect('/');
    }
}
