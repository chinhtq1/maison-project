<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Helper\Helper;

class HomeController extends Controller
{
    public function __construct()
    {
        // Defaults
        // MetaTag::set('description', 'Blog Wes Anderson bicycle rights, occupy Shoreditch gentrify keffiyeh.');
        // MetaTag::set('image', asset('images/default-share-image.png'));
    }

    public function index() {
        $section_setting = Setting::where('name', 'section')->firstOrFail();
        Helper::makeNonNested($section_setting->content);

        return view("index");
    }
}
