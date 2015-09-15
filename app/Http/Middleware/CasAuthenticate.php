<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Xavrsl\Cas\Facades\Cas;

class CASAuthenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $casauth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $casauth
     */
    public function __construct(Guard $casauth)
    {
        $this->casauth = $casauth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Cas::authenticate();

        return $next($request);
    }
}
