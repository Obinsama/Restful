<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthKey
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
        $token=$request->header('APP_KEY');
        if($token!='ABCD'){
            return response()->json(['message'=>'App Key not found'],401);//401 for Unauthorize
        }
        return $next($request);
    }
}
