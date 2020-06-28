<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Closure;

class AuthBasic
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
        if (Auth::onceBasic()){
            return response()->json(['message'=>'Auth failed'],401);//401 for Unauthorize

        }else{
            $subscription=DB::table('abonnements')->where('client_id',Auth::id())->get()->last();
            $date=date('Y-m-d H:i:s');
            if(!empty($subscription)){
                if($subscription->expiration <= $date){

                    return response()->json(['message'=>'Your subscription ended on  '.$subscription->expiration.'. You can take another plan to use this service'],401);//401 for Unauthorize

                }else{
                    return $next($request);
                }
            }else{
                return response()->json(['message'=>'You have no subscription to this service please suscribe to use it'],401);//401 for Unauthorize

            }
        }
    }
}
