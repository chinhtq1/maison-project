<?php

namespace App\Http\Middleware;
use Session;
use Auth;
use Closure;
use App\Article;

class Backend
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
        if (in_array(Auth::user()->status, config('auth.block_access.backend_status'))) {
            return redirect()->route('account-sign-out');
        }
        if (!in_array(Auth::user()->role, config('auth.access.backend'))) {
            if(!$request->has('lock') && !$request->has('active')){
                if(Auth::user()->id != $request->id ){
                    Session::flash('message', ['text'=>'Bạn không có quyển. Vui lòng đề nghị admin','type'=>'warning']);
                    return redirect()->route('admin_users');
                }
            }elseif($request->has('lock') || $request->has('active')){
                Session::flash('message', ['text'=>'Bạn không có quyển. Vui lòng đề nghị admin','type'=>'warning']);
                return redirect()->route('admin_users');
            }

        }

        return $next($request);
    }
}
