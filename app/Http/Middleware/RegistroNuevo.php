<?php

namespace App\Http\Middleware;

use Closure;

class RegistroNuevo
{

    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
