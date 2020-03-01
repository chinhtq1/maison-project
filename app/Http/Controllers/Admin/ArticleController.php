<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Article;
use \App\Helper\Helper;
use Illuminate\Support\Str;
use Validator, Session, Redirect;
use Image;


class ArticleController extends Controller
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

    public function index(Request $request){
        $page_name = "Danh sách bài viết";
        $articles = Article::all()->sortBy('id');
        return view('admin.articles.index',['articles'=>$articles,'page_name'=> $page_name]);
    }

    public function edit($id=null, Request $request){

        $user = Auth::user();
        $article = Article::where('id', $id)->first();

        // Active
        if ($request->has('public') && !is_null($article)) {
            $article->fill(['is_public' => true])->save();
            Helper::update_time_public($article);

            session()->flash('message', ['text' => 'Đã xuất bản bài viết: '.$article->title, 'type' => 'success']);
            return redirect()->back();
        }

        if ($request->has('unpublic') && !is_null($article)) {
            $article->fill(['is_public' => false])->save();
            $article->date_public=null;
            session()->flash('message', ['text' => 'Đã xét trạng thái chưa xuất bản cho bài viết: '.$article->title, 'type' => 'warning']);
            return redirect()->back();
        }
        $page_name = is_null($article)? "Tạo bài viết": 'Chỉnh sửa bài viết';

        return view('admin.articles.edit',['article'=>$article,'user'=>$user,'page_name'=> $page_name]);
    }

    public function store($id="0", Request $request){
        $article = Article::where('id', $id)->first();
        $unique = is_null($article)? null: ','.$article->id;
        $user = Auth::user();

        $rules = [
            'title' => 'required|string|max:255|min:2|unique:articles,title'.$unique,
            // 'slug' => 'string|max:512|min:2|unique:articles,slug'.$unique,
            'description' =>  'required|string|max:255',
            // 'picture_data[thumb_data"[height]' => 'integer|min:10|max:1000',
            // 'picture_data[thumb_data][width]' => 'integer|min:10|max:1000',
            // 'picture_data[main_picture_data][height]' => 'integer|min:10|max:2000',
            // 'picture_data[main_picture_data][width]' => 'integer|min:10|max:2000',
        ];

        $data = $request->only(['title', 'is_public', 'description','content','fb_link']);
        $picture_data = $request->only('main_picture');
        $validated = $request->validate($rules,[
            'required' => 'Không để trống',
            'string' => 'Không dùng ký tự lạ',
            'max' => 'Quá nhiều ký tự',
            'min' => 'Không ngắn hơn 2 ký tự',
            'unique' => 'Đã có người sử dụng',
            'confirmed' => 'Nhập lại mật khẩu không đúng',
        ]);
        
        $data['slug'] = str_slug($data['title']);


        // $data['auth'] = $user->id;
        if(isset($data['is_public'])){
            $data['is_public'] = true;
        }else{
            $data['is_public'] = false;
        }


        if (!is_null($article)) {
            $article->fill($data);
            $article->save();
        }else{
            $data['user_id'] = $user->id;
            $article = Article::create($data);
            $uploadDir = 'articles/article-'.$article->id.'/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $user->articles()->save($article);
        }

        $uploadDir = 'articles/article-'.$article->id.'/';

        // $pic_data["picture_data"]["main_picture_data"]["url"]="";
        // $pic_data["picture_data"]["thumb_data"]["url"] = "";

        // // Create main and thumbnail pic
        // if(isset($pic_data["picture_data"]["origin_url"]) 
        //         && isset($pic_data["picture_data"]["thumb_data"]["width"]) 
        //         && isset($pic_data["picture_data"]["thumb_data"]["height"])) {
                
        //         $origin = $pic_data["picture_data"]["origin_url"];
        //         $height = $pic_data["picture_data"]["thumb_data"]["height"];
        //         $width = $pic_data["picture_data"]["thumb_data"]["width"];

        //         $main_thumb = Helper::upload_picture($width,$height,
        //             config('lfm.base_directory').(Str::after($origin,'/'.config('lfm.url_prefix'))),
        //             'articles/article-'.$article->id.'/',
        //             'article-'.$article->id.'-thumbnail.JPG'
        //         );
        //         $pic_data["picture_data"]["thumb_data"]["url"] = $main_thumb;


        // }

        // if(isset($pic_data['picture_data']['origin_url']) 
        //         && isset($pic_data["picture_data"]["main_picture_data"]["width"]) 
        //         && isset($pic_data["picture_data"]["main_picture_data"]["height"])) {
                
        //         $origin = $pic_data["picture_data"]["origin_url"];
        //         $height = $pic_data["picture_data"]["main_picture_data"]["height"];
        //         $width = $pic_data["picture_data"]["main_picture_data"]["width"];
                
        //         $main_pic = Helper::upload_picture($width,$height,
        //             config('lfm.base_directory').(Str::after($origin,'/'.config('lfm.url_prefix'))),
        //             'articles/article-'.$article->id.'/',
        //             'article-'.$article->id.'-main-picture.JPG'
        //         );

        //     $pic_data["picture_data"]["main_picture_data"]["url"] = $main_pic;

        // }

        if (\Request::hasFile("main_picture")) {
            $file_path = $picture_data['main_picture']->getPathName();
            $extension = $picture_data['main_picture']->getClientOriginalExtension();
            $allowedExtensions = array('jpeg', 'jpg', 'png', 'bmp', 'gif');
            $file_rename   = 'main-image.' . $extension;
            if (in_array($extension, $allowedExtensions)) {
                                // create thumbnail
                $thumbnail_name = 'thumbnail.'.$extension;
                // dd(public_path($uploadDir .$thumbnail_name));
                $thumbnail = Image::make($file_path)->resize(
                    config("config.article.thumbnail_size.width"), 
                    config("config.article.thumbnail_size.height"))->save(public_path($uploadDir .$thumbnail_name));
                $picture_data['thumbnail'] = $uploadDir . $thumbnail_name;

                $picture_data['main_picture']->move(public_path($uploadDir), $file_rename);
                $picture_data['main_picture'] = $uploadDir . $file_rename;

                $article->main_picture = $picture_data["main_picture"];
                $article->thumbnail = $picture_data["thumbnail"];
            }

        }

        // dd($pic_data);



        Helper::update_time_public($article);

        $text = is_null($article)? "Đã tạo thành công bài viết: {$article->title}": "Đã cập nhật thành công bài viết: {$article->name}";

        session()->flash('message', ['text' => $text, 'type' => 'success']);

        return redirect()->route('admin_articles');


    }


    public function delete($id, Request $request) {
        $article = Article::where('id', '=', $id)->firstOrFail ();
        return view('admin.articles.delete', ['article'=> $article, 'page_name' => 'Xóa bài viết']);
    }

    public function delete_comfirm($id, Request $request) {
        $article = Article::where('id', '=', $id)->firstOrFail ();
        $article->delete();
        \File::deleteDirectory(public_path('articles/article-'.$article->id));

        Session::flash('message', ['text'=>'deleted!','type'=>'success' ]);

        return Redirect::route('admin_articles');
    }

}
