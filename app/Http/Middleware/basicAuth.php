<?php

namespace App\Http\Middleware;

class AuthenticateWithBasicAuth
{
    public function handle($request, $next)
    {
        if($request->getUser() != conf('auth.credentials.user') && $request->getPassword() != conf('auth.credentials.pass')) {
            $headers = array('WWW-Authenticate' => 'Basic');
            return response('Unauthorized', 401, $headers);
        }
        return $next($request);
    }
}