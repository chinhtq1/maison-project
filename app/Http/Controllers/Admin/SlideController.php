<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('admin.slides.index', ['page_name' => "Trang quản lý Slide"]);

    }

    public function edit($id='0',Request $request){
        return view('admin.slides.edit', ['page_name' => "Thêm Slide"]);
    }
}
