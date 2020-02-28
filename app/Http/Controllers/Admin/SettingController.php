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

    function general_index(){
        $result = Setting::firstOrCreate(['name' => 'general', 'type' => 'setting']);
        // dd($result->content);
        return view('admin.settings.general-index', ['page_name' => 'General', 'result'=>$result]);
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

    function general_store(Request $request){
        $data = $request->all();
        // dd($data);
        $result = Setting::firstOrCreate(['name' => 'general', 'type' => 'setting']);
        $setting = is_null($result->content)? []: json_decode($result->content, true);
        if (!is_dir('static')) {
            mkdir('static', 0777, true);
        }
        foreach ($data['data'] as $key => $value) {
            $setting[$key] = $value;
        }
        $uploadDir = 'static/';

        if (\Request::hasFile('icon')) {
            $extension = $data['icon']->getClientOriginalExtension();
            $file_rename   = 'favicon.'. $extension;
            if($extension == 'ico'){
                move_uploaded_file($_FILES['icon']['tmp_name'], $file_rename);
            }
        }

        if (\Request::hasFile('home_image')) {
            $extension = $data['home_image']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'home_image.'. $extension;
            if(in_array($extension, $allowedExtensions)){
                $data['home_image']->move($uploadDir, $file_rename);
                $setting['home_image'] = asset($uploadDir.$file_rename);
            }
        }
        
        if (\Request::hasFile('logo_desktop')) {
            $extension = $data['logo_desktop']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'logo_desktop.'. $extension;
            if(in_array($extension, $allowedExtensions)){
                $data['logo_desktop']->move($uploadDir, $file_rename);
                $setting['logo_desktop'] = '/'.$uploadDir.$file_rename;
            }
        }

      

        if (\Request::hasFile('logo_mobile')) {
            $extension = $data['logo_mobile']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'logo_mobile.'. $extension;
            if(in_array($extension, $allowedExtensions)){
                $data['logo_mobile']->move($uploadDir, $file_rename);
                $setting['logo_mobile'] = asset($uploadDir.$file_rename);
            }
        }

        if (\Request::hasFile('banner_desktop')) {
            $extension = $data['banner_desktop']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'banner_desktop.'. $extension;
            if(in_array($extension, $allowedExtensions)){
                $data['banner_desktop']->move($uploadDir, $file_rename);
                $setting['banner_desktop'] = asset($uploadDir.$file_rename);
            }
        }

        if (\Request::hasFile('banner_mobile')) {
            $extension = $data['banner_mobile']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'banner_mobile.'. $extension;
            if(in_array($extension, $allowedExtensions)){
                $data['banner_mobile']->move($uploadDir, $file_rename);
                $setting['banner_mobile'] = asset($uploadDir.$file_rename);
            }
        }

        if (\Request::hasFile('logo_poem')) {
            $extension = $data['logo_poem']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'logo_poem.'. $extension;
            if(in_array($extension, $allowedExtensions)){
                $data['logo_poem']->move($uploadDir, $file_rename);
                $setting['logo_poem'] = asset($uploadDir.$file_rename);
            }
        }

        if (\Request::hasFile('logo_footer')) {
            $extension = $data['logo_footer']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'logo_footer.'. $extension;
            if(in_array($extension, $allowedExtensions)){
                $data['logo_footer']->move($uploadDir, $file_rename);
                $setting['logo_footer'] = asset($uploadDir.$file_rename);
            }
        }

    
        $result->content = json_encode($setting);
        $result->save();
        return redirect()->back()->with('status', 'Settings has been saved.');
    }
}
