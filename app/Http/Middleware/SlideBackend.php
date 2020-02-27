<?php

namespace App\Http\Middleware;
use Session;
use Auth;
use Closure;
use App\Models\Slides;

class SlideBackend
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
                $slide = Slides::where('id',$request->id)->first();
                if(!empty($slide) && Auth::user()->id != $slide->user_id ){
                    Session::flash('message', ['text'=>'Bạn không có quyển. Vui lòng đề nghị admin','type'=>'warning']);
                    return redirect()->route('admin_slides');
                }
        }

        return $next($request);
    }
}
