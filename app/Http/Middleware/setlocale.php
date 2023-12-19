<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class setlocale
{
   
    public function handle(Request $request, Closure $next): Response
    {

        if (session()->has('locale') && array_key_exists(session('locale'), config('app.supportedLocales'))) {


            app()->setLocale(session('locale'));
        }
        return $next($request);
    }
}
