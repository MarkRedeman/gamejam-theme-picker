<?php namespace GameJam\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Admin {

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
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
        if ($this->auth->guest() || ! $this->auth->user()->is_admin)
        {
            return ($request->ajax())
                ? response('Unauthorized.', 401)
                : redirect()->guest('auth/login');
        }

        return $next($request);
    }

}
