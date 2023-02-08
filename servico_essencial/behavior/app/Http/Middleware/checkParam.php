<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class checkParam
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $param)
    {

        Log::info('Foi invocado o meu primeiro middleware! ['. $param .']');

        return $next($request);
    }
}
