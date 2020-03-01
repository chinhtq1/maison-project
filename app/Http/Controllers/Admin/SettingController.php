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

    // function index()
    // {
    //     $setting = Setting::firstOrCreate(['name' => 'section', 'type' => 'setting']);
    //     $result = empty($setting->content) ? [] : $setting->content;
    //     // dd($result);
    //     return view('admin.settings.index', ['page_name' => 'Trang Settings', 'result' => $result]);
    // }

    function general_index()
    {
        $result = Setting::firstOrCreate(['name' => 'general', 'type' => 'setting']);
        // dd($result->content);
        return view('admin.settings.general-index', ['page_name' => 'General', 'result' => $result]);
    }


    function store(Request $request)
    {
        $data = $request->only(config('config.sections'));
        $setting = Setting::firstOrCreate(['name' => 'section', 'type' => 'setting']);
        foreach (config('config.sections') as $section) {
            if (array_key_exists($section, $data)) {
                if (array_key_exists("images", $data[$section])) {
                    $images = $data[$section]['images'];
                    foreach ($images as $key => $image) {
                        if ($image["url"] != null) {
                            $imageUrl = Helper::upload_picture(
                                0,
                                0,
                                config('lfm.base_directory') . (Str::after($image['url'], config('lfm.url_prefix'))),
                                'sections/' . $section . '/',
                                'image-' . $key . '.PNG'
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
    function text_single_index()
    {
        $result = Setting::firstOrCreate(['name' => 'text_single', 'type' => 'setting']);
        // dd($result->content);
        return view('admin.settings.text-single-index', ['page_name' => 'Chỉnh Sửa Text Đơn', 'result' => $result]);
    }

    function slides_index()
    {
        $result = Setting::firstOrCreate(['name' => 'slides', 'type' => 'setting']);
        if(is_null($result->content)){
            $result->content = '{}';
        }
        return view('admin.settings.slides-index', ['page_name' => 'Chỉnh Sửa Text Đơn', 'result' => $result]);
    }

    function text_single_store(Request $request) {
        $data = $request->all();
        $result = Setting::firstOrCreate(['name' => 'text_single', 'type' => 'setting']);
        if(is_null($result->content)){
            $result->content = '{}';
        }
        $setting = is_null($result->content) ? [] : json_decode($result->content, true);
        foreach ($data as $key => $value) {
            $setting[$key] = $value;
        }
        $result->content = json_encode($setting);
        $result->save();
        return redirect()->back()->with('status', 'Settings has been saved.');
    }

    function slides_store(Request $request) {
        $data = $request->all();
        $result = Setting::firstOrCreate(['name' => 'slides', 'type' => 'setting']);
        $setting = is_null($result->content) ? [] : json_decode($result->content, true);

        if (!is_dir('static')) {
            mkdir('static', 0777, true);
        }
        foreach ($data as $key => $value) {
            $setting[$key] = $value;
        }
        $uploadDir = 'static/';

        if (\Request::hasFile('anh_slide_1')) {
            $extension = $data['anh_slide_1']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'anh_slide_1'.'.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['anh_slide_1']->move(public_path($uploadDir), $file_rename);
                $setting['anh_slide_1'] = $uploadDir . $file_rename;
            }
        }
        if (\Request::hasFile('anh_slide_2')) {
            $extension = $data['anh_slide_2']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'anh_slide_2'.'.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['anh_slide_2']->move(public_path($uploadDir), $file_rename);
                $setting['anh_slide_2'] = $uploadDir . $file_rename;
            }
        }
        if (\Request::hasFile('anh_slide_3')) {
            $extension = $data['anh_slide_3']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'anh_slide_3'.'.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['anh_slide_3']->move(public_path($uploadDir), $file_rename);
                $setting['anh_slide_3'] = $uploadDir . $file_rename;
            }
        }
        if (\Request::hasFile('anh_slide_4')) {
            $extension = $data['anh_slide_4']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'anh_slide_4'.'.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['anh_slide_4']->move(public_path($uploadDir), $file_rename);
                $setting['anh_slide_4'] = $uploadDir . $file_rename;
            }
        }
        if (\Request::hasFile('anh_slide_5')) {
            $extension = $data['anh_slide_5']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'anh_slide_5'.'.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['anh_slide_5']->move(public_path($uploadDir), $file_rename);
                $setting['anh_slide_5'] =$uploadDir . $file_rename;
            }
        }

        $result->content = json_encode($setting);
        $result->save();
        return redirect()->back()->with('status', 'Settings has been saved.');


    }

    function general_store(Request $request)
    {
        $data = $request->all();
        $result = Setting::firstOrCreate(['name' => 'general', 'type' => 'setting']);
        $setting = is_null($result->content) ? [] : json_decode($result->content, true);
        if (!is_dir('static')) {
            mkdir('static', 0777, true);
        }
        foreach ($data['data'] as $key => $value) {
            $setting[$key] = $value;
        }
        $uploadDir = 'static/';

        if (\Request::hasFile('icon')) {
            $extension = $data['icon']->getClientOriginalExtension();
            $file_rename   = 'favicon.' . $extension;
            if ($extension == 'ico') {
                move_uploaded_file($_FILES['icon']['tmp_name'], $file_rename);
            }
        }

        if (\Request::hasFile('home_image')) {
            $extension = $data['home_image']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'home_image.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['home_image']->move(public_path($uploadDir), $file_rename);
                $setting['home_image'] = asset($uploadDir . $file_rename);
            }
        }

        if (\Request::hasFile('logo_desktop')) {
            $extension = $data['logo_desktop']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'logo_desktop.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['logo_desktop']->move(public_path($uploadDir), $file_rename);
                $setting['logo_desktop'] = '/' . $uploadDir . $file_rename;
            }
        }



        if (\Request::hasFile('logo_mobile')) {
            $extension = $data['logo_mobile']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'logo_mobile.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['logo_mobile']->move(public_path($uploadDir), $file_rename);
                $setting['logo_mobile'] = asset($uploadDir . $file_rename);
            }
        }

        if (\Request::hasFile('banner_desktop')) {
            $extension = $data['banner_desktop']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'banner_desktop.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['banner_desktop']->move(public_path($uploadDir), $file_rename);
                $setting['banner_desktop'] = asset($uploadDir . $file_rename);
            }
        }

        if (\Request::hasFile('banner_mobile')) {
            $extension = $data['banner_mobile']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'banner_mobile.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['banner_mobile']->move(public_path($uploadDir), $file_rename);
                $setting['banner_mobile'] = asset($uploadDir . $file_rename);
            }
        }

        if (\Request::hasFile('logo_poem')) {
            $extension = $data['logo_poem']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'logo_poem.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['logo_poem']->move(public_path($uploadDir), $file_rename);
                $setting['logo_poem'] = asset($uploadDir . $file_rename);
            }
        }

        if (\Request::hasFile('niem_tin_tron_ven')) {
            $extension = $data['niem_tin_tron_ven']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'niem_tin_tron_ven.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['niem_tin_tron_ven']->move(public_path($uploadDir), $file_rename);
                $setting['niem_tin_tron_ven'] = asset($uploadDir . $file_rename);
            }
        }
        if (\Request::hasFile('map_desktop')) {
            $extension = $data['map_desktop']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'map_desktop.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['map_desktop']->move(public_path($uploadDir), $file_rename);
                $setting['map_desktop'] = asset($uploadDir . $file_rename);
            }
        }
        if (\Request::hasFile('map_mobile')) {
            $extension = $data['map_mobile']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'map_mobile.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['map_mobile']->move(public_path($uploadDir), $file_rename);
                $setting['map_mobile'] = asset($uploadDir . $file_rename);
            }
        }
        if (\Request::hasFile('logo_footer')) {
            $extension = $data['logo_footer']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'logo_footer.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['logo_footer']->move(public_path($uploadDir), $file_rename);
                $setting['logo_footer'] = asset($uploadDir . $file_rename);
            }
        }
        if (\Request::hasFile('mau_biet_thu_moi')) {
            $extension = $data['mau_biet_thu_moi']->getClientOriginalExtension();
            $allowedExtensions = array('pdf');
            $file_rename   = 'mau_biet_thu_moi.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['mau_biet_thu_moi']->move(public_path($uploadDir), $file_rename);
                $setting['mau_biet_thu_moi'] = asset($uploadDir . $file_rename);
            }
        }
        if (\Request::hasFile('ban_do_vi_tri')) {
            $extension = $data['ban_do_vi_tri']->getClientOriginalExtension();
            $allowedExtensions = array('pdf');
            $file_rename   = 'ban_do_vi_tri.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['ban_do_vi_tri']->move($uploadDir, $file_rename);
                $setting['ban_do_vi_tri'] = asset(public_path($uploadDir) . $file_rename);
            }
        }
        if (\Request::hasFile('hinh_anh_du_an')) {
            $extension = $data['hinh_anh_du_an']->getClientOriginalExtension();
            $allowedExtensions = array('pdf');
            $file_rename   = 'hinh_anh_du_an.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['hinh_anh_du_an']->move(public_path($uploadDir), $file_rename);
                $setting['hinh_anh_du_an'] = asset($uploadDir . $file_rename);
            }
        }

        if (\Request::hasFile('tien_ich_toan_my_image')) {
            $extension = $data['tien_ich_toan_my_image']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'tien_ich_toan_my_image.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['tien_ich_toan_my_image']->move(public_path($uploadDir), $file_rename);
                $setting['tien_ich_toan_my_image'] = asset($uploadDir . $file_rename);
            }
        }
        if (\Request::hasFile('kien_truc_chau_au_image')) {
            $extension = $data['kien_truc_chau_au_image']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'kien_truc_chau_au_image.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['kien_truc_chau_au_image']->move(public_path($uploadDir), $file_rename);
                $setting['kien_truc_chau_au_image'] = asset($uploadDir . $file_rename);
            }
        }
        if (\Request::hasFile('thuong_ngoan_my_canh_big')) {
            $extension = $data['thuong_ngoan_my_canh_big']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'thuong_ngoan_my_canh_big.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['thuong_ngoan_my_canh_big']->move(public_path($uploadDir), $file_rename);
                $setting['thuong_ngoan_my_canh_big'] = asset($uploadDir . $file_rename);
            }
        }
        if (\Request::hasFile('vi_tri_kim_cuong_image')) {
            $extension = $data['vi_tri_kim_cuong_image']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'vi_tri_kim_cuong_image.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['vi_tri_kim_cuong_image']->move(public_path($uploadDir), $file_rename);
                $setting['vi_tri_kim_cuong_image'] = asset($uploadDir . $file_rename);
            }
        }
        if (\Request::hasFile('thuong_ngoan_my_canh_small')) {
            $extension = $data['thuong_ngoan_my_canh_small']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'thuong_ngoan_my_canh_small.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                $data['thuong_ngoan_my_canh_small']->move(public_path($uploadDir), $file_rename);
                $setting['thuong_ngoan_my_canh_small'] = asset($uploadDir . $file_rename);
            }
        }


        $result->content = json_encode($setting);
        $result->save();
        return redirect()->back()->with('status', 'Settings has been saved.');
    }
}
