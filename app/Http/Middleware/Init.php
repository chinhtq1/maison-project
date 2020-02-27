<?php

namespace App\Http\Middleware;
use Session;
use Auth;
use Closure;
use App\Models\Setting;
use App\Helper\Helper;

class Init
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,  $guard = null)
    {   Setting::firstOrCreate(['name' => 'section', 'type' => 'setting']);
        Setting::firstOrCreate(['name' => 'section', 'type' => 'setting']);

        $section_setting = Setting::where('name', 'section')->firstOrFail();
        Helper::makeNonNested($section_setting->content);
        

        $general_setting = Setting::where('name', 'general')->firstOrFail();
        Helper::makeNonNested($general_setting->content);
        return $next($request);
    }
}
