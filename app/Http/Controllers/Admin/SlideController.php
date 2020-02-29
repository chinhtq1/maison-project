<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \App\Helper\Helper;

use App\Models\Slides;
use Auth;
use Image;

class SlideController extends Controller
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
    //
    public function index(Request $request)
    {   
        $slides = Slides::all()->sortBy('id');
        return view('admin.slides.index', ['slides' => $slides,  'page_name' => "Trang quản lý Slide"]);

    }

    public function edit($type=null, $id='0',Request $request){

        $slide = Slides::where('type', $type)->where('id', $id)->first();
        $page_name = is_null($slide)? "Tạo Slide": 'Chỉnh sửa Slide';

                // Active
        if ($request->has('public') && !is_null($slide)) {
            $slide->fill(['is_public' => true])->save();
            session()->flash('message', ['text' => 'Đã xuất bản bài viết: '.$slide->title, 'type' => 'success']);
            return redirect()->back();
        }

        if ($request->has('unpublic') && !is_null($slide)) {
            $slide->fill(['is_public' => false])->save();
            session()->flash('message', ['text' => 'Đã xét trạng thái chưa xuất bản cho bài viết: '.$slide->title, 'type' => 'warning']);
            return redirect()->back();
        }

        return view('admin.slides.edit', ['type'=>$type,'slide'=>$slide,'page_name' => $page_name]);
    }

    public function store($type = null,$id='0',Request $request){
        $slide = Slides::where('id', $id)->first();
        $unique = is_null($slide)? null: ','.$slide->id;
        $user = Auth::user();

        $rules = [
            'title' => 'required|string|max:255|min:2|unique:slides,title'.$unique,
            // 'slug' => 'string|max:512|min:2|unique:articles,slug'.$unique,
            'description' =>  'required|string|max:255',
        ];

        $data = $request->only(['title', 'is_public', 'description','fb_link']);
        $data["type"]=$type;
        $validated = $request->validate($rules,[
            'required' => 'Không để trống',
            'string' => 'Không dùng ký tự lạ',
            'max' => 'Quá nhiều ký tự',
            'min' => 'Không ngắn hơn 2 ký tự',
            'unique' => 'Đã có người sử dụng',
            'confirmed' => 'Nhập lại mật khẩu không đúng',
        ]);

        

        if(isset($data['is_public'])){
            $data['is_public'] = true;
        }else{
            $data['is_public'] = false;
        }


        if (!is_null($slide)) {
            $slide->fill($data);
            $slide->save();
            $user->slides()->save($slide);
        }else{
            $data['user_id'] = $user->id;
            $slide = Slides::create($data);
            $uploadDir = "slides/slide-".$slide->id."/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $user->slides()->save($slide);
        }
        $uploadDir = "slides/slide-".$slide->id."/";
        $slides_data = $request->only('slides');


        if(isset($slides_data['slides'])){
            foreach ($slides_data['slides'] as $key => $slide_data) {
                if($slide_data['type']==config("config.slides.types.1")){
                    if (\Request::hasFile("slides.".$key.".text")) {
                        $file_path = $slide_data['text']->getPathName();
                        $extension = $slide_data['text']->getClientOriginalExtension();
                        $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
                        $file_rename   = 'slide-image-'.$key.'.'. $extension;
                        if (in_array($extension, $allowedExtensions)) {
                            $slide_data['text']->move($uploadDir, $file_rename);
                            $slide_data['text'] = $uploadDir . $file_rename;
                            $slides_data['slides'][$key]["text"] = $slide_data['text'];
                        }
                    }else{
                        if(array_key_exists('text',$slide_data) && !is_null($slide_data["text"]) ){
                            $extension = Str::after($slide_data['text'],'.');
                            $file_rename   = 'slide-image-'.$key.'.'. $extension;
                            Image::make(public_path($slide_data['text']))->save(public_path($uploadDir .$file_rename));

                        }else if (array_key_exists('text',$slide_data) && is_null($slide_data["text"])){
                            $slides_data['slides'][$key]["text"] = "";
                        }
                    }
                }
            }
        
        }

        $slide->data = $slides_data;

        Helper::update_time_public($slide);

        $text = is_null($slide)? "Đã tạo thành công bài viết:". $slide->title: "Đã cập nhật thành công bài viết:".$slide->name;

        session()->flash('message', ['text' => $text, 'type' => 'success']);

        return redirect()->route('admin_slides');
    }

    public function delete($id, Request $request) {
        $slide = Slides::where('id', '=', $id)->firstOrFail ();
        return view('admin.slides.delete', ['slide'=> $slide, 'page_name' => 'Xóa Slide']);
    }

    public function delete_comfirm($id, Request $request) {
        $slide = Slides::where('id', '=', $id)->firstOrFail ();
        $slide->delete();
        \File::deleteDirectory(public_path('slides/slide-'.$slide->id));

        session()->flash('message', ['text'=>'deleted!','type'=>'success' ]);

        return redirect()->route('admin_slides');
    }

}
