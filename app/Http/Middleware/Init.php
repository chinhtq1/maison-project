<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Setting;

use MetaTag;

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

    
    {   
        
        \Carbon\Carbon::setLocale('vi');
        if (!cache()->has('general')) {
            $result = Setting::firstOrCreate(['name' => 'general', 'type' => 'setting']);
            $general = is_null($result->content)? []: json_decode($result->content);
            cache()->put('general', $general, env('CACHE_TIME', 30));
        }else{
            $general = cache('general');
        }
        // dd($general);
        foreach ( json_decode($general,true) as $key => $value) {
            if (is_string($value)) {
                MetaTag::set($key, $value);
            }
        }

        // Setting::firstOrCreate(['name' => 'section', 'type' => 'setting']);

        // $section_setting = Setting::where('name', 'section')->firstOrFail();
        // Helper::makeNonNested($section_setting->content);

        // $general_setting = Setting::where('name', 'general')->firstOrFail();
        // Helper::makeNonNested($general_setting->content);
        return $next($request);
    }
}
