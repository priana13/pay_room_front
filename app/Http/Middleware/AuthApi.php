<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = session()->get('app_token');           

        if($token){

            $url = config('services.api_url');  
            $response = Http::accept('application/json')
                        ->withToken($token)->get($url . '/user'); 

                if($response->unauthorized()){

                    return redirect()->route('login');

                }else{

                    return $next($request);
                }  

        }else{


            return redirect()->route('login');


        }




      

        


    }
}
