<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    //
    public function index()
    {
        // $articles = [];
        $articles = Article::all()->sortByDesc('created_at');
        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.index', ['articles' => Article::all()]);
    }
}
