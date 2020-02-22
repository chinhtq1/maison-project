<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class AdminController extends Controller
{
    protected $HOME_PAGE = "Trang Quản Trị";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(Request $request)
    {   
        return view('admin.home', ['page_name' => "Trang Quản Trị"]);

    }

    public function image_manager(Request $request){
        return view('admin.manager.image-manager', ['page_name' => "Quản lý ảnh"]);
    }


    public function file_manager(Request $request){
        return view('admin.manager.file-manager', ['page_name' => "Quản lý file"]);
    }

    public function getSignOut() {
        Session::flush();
        Auth::logout();
        return redirect()->route('home');
        
    }


}
