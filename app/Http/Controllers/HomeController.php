<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Page;
use App\Models\User;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments   = Comment::all();
        $pages      = Page::all();
        $users      = User::all();
        $categories = Category::orderBy('created_at','DESC')->get();
        $articles   = Article::orderBy('created_at','DESC')->get();
        return view('home', compact('articles','comments','categories','pages','users'));
    }
}
