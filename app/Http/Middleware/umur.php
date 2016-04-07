<?php

namespace App\Http\Middleware;

use Closure;

class umur
{
    
    public function handle($request, Closure $next)
    {
        if($request->input('umur')<21){
            return redirect('tolak');
        }
        return $next($request);
    }
}
