<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminMiddleware
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
        $user = User::all()->count();

        if (!($user == 1)) {
            /*
            if (!Auth::user()->hasPermissionTo('Admin')) {
                abort('401');
            }
            if (!Auth::user()->hasPermissionTo('Owner')) {
                abort('401');
            }
            if (!Auth::user()->hasPermissionTo('Edit')) {
                abort('401');
            }
            if (!Auth::user()->hasPermissionTo('Select')) {
                abort('401');
            }
            */
        }
        
        return $next($request);
    }
}