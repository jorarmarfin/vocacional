<?php

namespace App\Http\Middleware;

use Closure;

use App\User;
use Illuminate\Routing\Route;

class BeforefindUser
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
        /*dd($request->route()->parameters('users'));*/
        $this->user = User::findOrFail($request->route()->parameters('users'));
        return $next($request);
    }
}
