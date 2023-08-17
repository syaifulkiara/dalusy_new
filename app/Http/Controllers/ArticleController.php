<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Article;
use App\Models\Category;
use Alert;
use Str;
use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at','DESC')->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:articles|min:10|max:200',
            'content' => 'required|min:10'
        ]);

        $articles              = new Article;
        $articles->category_id = $request->category_id;
        $articles->title       = $request->title;
        $articles->slug        = Str::slug($articles->title);
        $articles->author      = Auth::user()->name;
        $articles->content     = $request->content;
        if($request->file('images')) {
             $file          = $request->file('images');
             $filename      = str_replace(" ", "", $file->getClientOriginalName());
             $file->move('public/images/articles', $filename);
             $articles->images   = 'images/articles/'.$filename;
         }
        $articles->save();
        Alert::success('Berhasil', 'Berhasil Membuat Artikel');
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Article::find($id);
        $categories = Category::all();
        return view('articles.edit', compact('articles','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:10|max:200'
        ]);

        $articles              = Article::find($id);
        $articles->category_id = $request->category_id;
        $articles->title       = $request->title;
        $articles->content     = $request->content;
        if($request->file('images')) {
             $file          = $request->file('images');
             $filename      = str_replace(" ", "", $file->getClientOriginalName());
             $file->move('public/images/articles', $filename);
             
             File::delete(public_path($articles->images));
             $articles->images   = 'images/articles/'.$filename;
         }
        $articles->save();
        
        Alert::success('Berhasil', 'Berhasil Ubah Artikel');
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles = Article::find($id);
        $articles->delete();
        Alert::success('Berhasil', 'Berhasil Hapus Artikel');
        return redirect()->route('articles.index');
    }
}
