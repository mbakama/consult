<?php

namespace App\Http\Middleware; 
use Carbon\Carbon;
use Closure;
use App\Models\User;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class UserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // last seen user

            User::where('id', Auth::user()->id)->update(['lastLogin'=>now()]);

            $expireAt = Carbon::now() ->addMinutes(2);
            Cache::put('user-is-online' . Auth::user()->id,true, $expireAt); 
            
        }
        return $next($request);
    }
}
