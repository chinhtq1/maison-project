<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
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
        $articles = Article::all()->toArray();
        //  dd($articles);
        return view('index', compact('articles'));
    }
}
