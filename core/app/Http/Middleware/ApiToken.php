<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class ApiToken
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
        $apitoken = $request->header('apitoken');
        if($apitoken){
            $user = User::where('apitoken',$apitoken)->first();
            if($user){
                $request->merge([
                    'user' => $user
                ]);
                return $next($request);
            }

        }
        return response()->json([
            'success' => false,
            'message' => "Unauthorized Access"
        ],401);
    }
}
