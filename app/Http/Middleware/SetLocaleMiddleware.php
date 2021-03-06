<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;

class SetLocaleMiddleware
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
        $default = Request::server('HTTP_ACCEPT_LANGUAGE');

        $dividedLang = substr($default, 0, 2);
        
        $locale = session('locale', $dividedLang);
        
        App::setLocale($locale);
       
        return $next($request);
    }
}
