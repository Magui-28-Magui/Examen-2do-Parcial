<?php

namespace App\Http\Middleware;

use Closure;

class ElRegistro
{
 public function handle($request, Closure $next)
    {
        if ($request->has(['nombre','color','raza','genero','animales_id'])){
            return $next($request);
        }
        return redirect('home');
    }
}
