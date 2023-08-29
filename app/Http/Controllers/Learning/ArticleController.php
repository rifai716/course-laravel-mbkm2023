<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    function view($slug) {
        return view('learning.article_view', compact('slug'));
    }
}
