<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Setting;
use App\Helper\Helper;
use Response;
use App\Models\Slides;

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
        $articles = Article::where('is_public', true)->get()->sortByDesc('date_public')->toArray();
        $result = Setting::firstOrCreate(['name' => 'text_single', 'type' => 'setting']);
        $setting = is_null($result->content) ? [] : json_decode(json_encode($result->content), true);
        // dd($setting);
        $result = Setting::firstOrCreate(['name' => 'slides', 'type' => 'setting']);
        $slide_setting = is_null($result->content) ? [] : json_decode($result->content, true);
        // dd($slide_setting);
        $slide_chu = [];
        if(array_key_exists('slide_chu', $slide_setting)){
            $slide_chu = Slides::where('id', $slide_setting['slide_chu'])->first();

            $slide_chu = $slide_chu->data  ?json_decode(json_encode($slide_chu->data), true):[];
        }

        if(array_key_exists('slides', $slide_chu)){
            $slide_chu = $slide_chu['slides'];
        }
        return view('index', compact('articles','setting','slide_chu'));
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
