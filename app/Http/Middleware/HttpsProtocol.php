<?php
/**
 * Created by PhpStorm.
 * User: ninge
 * Date: 9/30/16
 * Time: 8:16 PM
 */


namespace App\Http\Middleware;

use Closure;

class HttpsProtocol {

    public function handle($request, Closure $next)
    {
        if (!$request->secure() && env('APP_ENV') === 'prod') {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
        
    }
}