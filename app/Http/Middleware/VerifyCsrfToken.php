<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier {

    protected $except = [
        '/sgsp',
        'sgsp',
    ];
    /**
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @return mixed
     * @throws \Illuminate\Session\TokenMismatchException
     *
     */
	public function handle($request, Closure $next)
	{
        if ($request->is('/*'))
        {
            return $next($request);
        }
		return parent::handle($request, $next);
	}

}
