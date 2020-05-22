<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RevisorMiddleware
{

    public function handle($request, Closure $next)
    {
        if (Auth::user()  &&  Auth::user()->roles > 0) {


            return $next($request);
        }

        return redirect('/')->with('access.denied.revisor.only','access denied');
    }
}
