<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;
use Redirect, Input, Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.articles.index')->withArticles(Article::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'title' => 'required|unique:articles|max:255',
                'body' => 'required',
            ]);

        $article = new Article();
        $article->title = Input::get('title');
        $article->body = Input::get('body');
        $article->user_id = 1;//Auth::user()->id;

        if(Input::file('image')){
            $image = Input::file('image');
            $destinationPath = 'img/uploads/';//upload path
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = date("ymdHis",time()).rand(1111,9999).'.'.$extension;
            Input::file('image')->move($destinationPath,$fileName);

            $article->image = $destinationPath . $fileName;
        }

        if ($article->save()) {
            return Redirect::to('admin/articles');
        } else {
            return Redirect::back()->withInput()->withErrors('Save Error!');
        }
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
     * @return Response
     */
    public function edit($id)
    {
        return view('admin.articles.edit')->withArticles(Article::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
                'title' => 'required|unique:articles,title,'.$id.'|max:255',
                'body' => 'required',
            ]);
        $article = Article::find($id);
        $article->title = Input::get('title');
        $article->body = Input::get('body');
        $article->user_id = 1;//Auth::user()->id;

if(Input::file('image')){
            $image = Input::file('image');
            $destinationPath = 'img/uploads/';//upload path
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = date("ymdHis",time()).rand(1111,9999).'.'.$extension;
            Input::file('image')->move($destinationPath,$fileName);

            $article->image = $destinationPath . $fileName;
        }

        if ($article->save()) {
            return Redirect::to('admin/articles');
        } else {
            return Redirect::back()->withInput()->withErrors('Save Error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return Redirect::to('admin/articles');
    }
}