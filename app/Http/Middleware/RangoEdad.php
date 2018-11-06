<?php

namespace App\Http\Middleware;

use Closure;

class RangoEdad
{
    public function handle($request, Closure $next)
    {
        if ($request->age >= 18 && $request->age <=60)
         {
            return $next($request);
        }
                                     return redirect('home');
    }
}
