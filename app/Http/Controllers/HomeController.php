<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Setting;
use App\Helper\Helper;
use Response;

class HomeController extends Controller
{
    public function __construct()
    {
        // Defaults
        // MetaTag::set('description', 'Blog Wes Anderson bicycle rights, occupy Shoreditch gentrify keffiyeh.');
        // MetaTag::set('image', asset('images/default-share-image.png'));
    }

    public function index()
    {
        $articles = Article::all()->toArray();
        $result = Setting::firstOrCreate(['name' => 'text_single', 'type' => 'setting']);
        $setting = is_null($result->content) ? [] : json_decode($result->content, true);
        // dd($setting);
        return view('index', compact('articles','setting'));
    }

    public function pdf($id)
    {
        $file = 'static' . '/' . $id . '.pdf';
        if (file_exists($file)) {
            return response()->file($file);
        } else {
            abort(404, 'File not found!');
        }
    }
}
