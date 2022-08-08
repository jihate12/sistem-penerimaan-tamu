<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfLoggedIn
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
        if (!auth()->user() or !auth::guard('user')->user()) {
            return $next($request);
        } else {
            if (auth()->user()->level == 0) {
                return redirect()->route('show-tamu');
            } else if (auth()->user()->level == 1) {
                return redirect()->route('show-pegawai');
            } else {
                return redirect()->route('dashboard-tamu');
            }
        }
    }
}
