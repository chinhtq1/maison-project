<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Validator;
use App\Helper\Helper;
use Illuminate\Support\Str;
use  App\Http\Resources\Slides as SlidesResource;
use App\Models\Slides;


class SettingController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $setting = Setting::firstOrCreate(['name' => 'section', 'type' => 'setting']);
        $result = empty($setting->content)? []: $setting->content;
        // dd($result);
        return view('admin.settings.index', ['page_name' => 'Trang Settings', 'result'=>$result]);
    }


    function store(Request $request){
        $data= $request->only(config('config.sections'));
        $setting = Setting::firstOrCreate(['name' => 'section', 'type' => 'setting']);
        foreach (config('config.sections') as $section){
            if(array_key_exists($section, $data)){
                if(array_key_exists("images",$data[$section])){
                    $images = $data[$section]['images'];
                    foreach ($images as $key => $image){
                        if($image["url"] != null){
                            $imageUrl = Helper::upload_picture(0,0,
                            config('lfm.base_directory').(Str::after($image['url'],config('lfm.url_prefix'))),
                            'sections/'.$section.'/',
                            'image-'.$key.'.PNG'
                            );
        
                            $data[$section]['images'][$key]["main_url"] = asset($imageUrl);
                        }
                    }
                }
            }
        }
        $setting->fill(['content' => $data])->save();
        return redirect()->back()->with('status', 'Settings has been saved.');
    }
}
