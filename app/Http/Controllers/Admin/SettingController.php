<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Helper;
use Validator;

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
        return view('admin.settings.index', ['page_name' => 'Trang Settings', 'result'=>null]);
    }

    function edit($id){
 
        
    }
}
