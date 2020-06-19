<?php
use App\User;
namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next)
    {
        $user = User::where('api_token', $request->api_token)->first();
        if(!is_null($user)){
            return $next($request);
        }

        return response()->json([
            'Etat' => "Désolé, vous n'avez pas de token"
        ]);
    }
}