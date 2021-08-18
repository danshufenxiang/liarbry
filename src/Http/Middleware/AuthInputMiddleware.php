<?php
namespace Leading\Lib\Http\Middleware;


use Closure;
use Illuminate\Http\Request;

/**
 * Class AuthInputMiddleware
 * @package LarAnt\Lib\Http\Middleware
 */
class AuthInputMiddleware
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->json()->add(['user_id' => $request->user()->id]);

        return $next($request);
    }
}