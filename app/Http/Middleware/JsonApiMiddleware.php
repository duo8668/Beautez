<?php

namespace App\Http\Middleware;

use Closure;

class JsonApiMiddleware
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
        $parsedMethod = ['POST', 'PUT', 'PATCH'];
        if (in_array($request->getMethod(), $parsedMethod))
        {
            $request->merge((array) json_decode($request->getContent()));
        }
        return $next($request);
    }

}
