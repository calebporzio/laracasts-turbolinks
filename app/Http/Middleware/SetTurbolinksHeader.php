<?php

namespace App\Http\Middleware;

use Closure;

class SetTurbolinksHeader
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->header('Turbolinks-Location', $request->url());

        return $response;
    }
}
