<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Society;
use Illuminate\Http\Request;

class AuthToken
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
        // if($request->token){
        //     $validate = Society::where('token', $request->token)->first();
        //     if(!$validate){
        //         return response()->json(['message' => 'Token Mismatch']);
        //     }

        //     return $next($request);
        // } else{
        //     return response()->json(['message' => 'Unauthorize User']);
        // }

        return $next($request);

    }
}
