<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Page;
use App\Models\User;
use Auth;
use Alert;
class MainController extends Controller
{
    public function index()
    {
        $features   = Article::inRandomOrder()->latest()->get();
        $articles   = Article::orderBy('created_at','DESC')->paginate(9);
        $latestposts= Article::orderBy('created_at','DESC')->get();
        $categories = Category::orderBy('created_at','DESC')->get();
        $pages      = Page::all();
        
        return view('main', compact('articles','categories','pages','features','latestposts'));
    }
    
    public function search(request $request)
    {
        $articles = Article::where('title', $request->search)->orWhere('title','LIKE','%'.$request->search.'%')->paginate(4);
        return view('main',compact('articles'));
    }

    public function single($slug)
    {
        $features   = Article::inRandomOrder()->get();
        $posts      = Article::where('slug','=', $slug)->first();
        $latestposts= Article::orderBy('created_at','DESC')->get();
        $categories = Category::orderBy('created_at','DESC')->get();
        $pages      = Page::all();
        $relateds   = Article::where('category_id', '=', $posts->category->id)
            ->where('id', '!=', $posts->id)
            ->get();
        return view('single', compact('posts','categories','pages','features','relateds','latestposts'));
    }

    public function pages($slug)
    {
        $page       = Page::where('slug','=', $slug)->first();
        $categories = Category::orderBy('created_at','DESC')->get();
        $pages      = Page::all();
        return view('page', compact('page','categories','pages'));
    }

    public function category()
    {
        $allcategory    = Category::all();
        $categories     = Category::orderBy('created_at','DESC')->get();
        $category       = Category::orderBy('created_at','DESC')->paginate(6);
        $most           = Article::with('category')->inRandomOrder()->get();
        $pages          = Page::all();
        return view('category', compact('categories','pages','most','allcategory','category'));
    }
    
    public function categorypost($slug)
    {
        $categories     = Category::orderBy('created_at','DESC')->get();
        $pages          = Page::all();
        $latestposts    = Article::orderBy('created_at','DESC')->get();
        $categorypost   = Category::where('slug', $slug)->first();
        if($categorypost)
        {
            $posts      = Article::where('Category_id',$categorypost->id)->orderBy('created_at','DESC')->paginate(5);
            return view('categorypost', compact('posts','categories','pages','categorypost','latestposts'));
        }else{    
        return redirect('/');
        }
    }

}

