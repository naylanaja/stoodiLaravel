<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        
            if (Auth::guard($guard)->check() && Auth::user()->role_id ==1) {
                return redirect()->route('admin.adminDash');
            } else if (Auth::guard($guard)->check() && Auth::user()->role_id == 2){
                return redirect()->route('teacher.teacherDash');
            } else if (Auth::guard($guard)->check() && Auth::user()->role_id == 3){
                return redirect()->route('student.classroom');
            } else{
                return $next($request);
            }
            
        

    }
}
