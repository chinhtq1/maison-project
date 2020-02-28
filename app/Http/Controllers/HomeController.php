<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
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
        //  dd($articles);
        return view('index', compact('articles'));
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
