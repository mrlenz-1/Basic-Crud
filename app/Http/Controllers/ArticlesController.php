<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->get();
        return view("articles.index",["articles"=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("articles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       request()->validate([
        'title' =>'required',
        'body' => 'required'
       ]);



        $articles = new Article();
        $articles->title = request("title");
        $articles->body = request("body");
        $articles->save();
        
        return redirect("/articles");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $articles = Article::find($id);
        return view("articles.show",["articles"=>$articles]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $articles = Article::find($id);
        return view("articles.edit",["articles"=>$articles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $articles = Article::find($id);
        $articles->title = request("title");
        $articles->body = request("body");
        $articles->save();
        return redirect("/articles");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articles = Article::find($id);
        $articles->delete();
        return redirect("/articles");
    }
}
