<?php

namespace App\Http\Controllers;

//articleクラスを読み込む｡
use App\article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        // モデル名::テーブル全件取得
        $article = article::all();
        // Articlesディレクトリーの中のindexページを指定し、itemsの連想配列を代入
        return view('articles.index', ['article' => $article]);
    }

    public function show($id)
    {
        $article = article::find($id);
        return view('articles.show' , ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        //インスタンス作成
        $article = new Article;

        //値の用意
        $article->title = $request->title;
        $article->body  = $request->body;
        $article->timestamps = $request->false;

        //インスタンスに値を設定して保存
        $article->save();

        //登録したらindexに戻る
        return redirect('/articles');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit' , [ 'article' => $article ]);
    }

    public function update(ArticleRequest $request , $id)
    {
        //インスタンス作成
        $article = Article::find($id);

        //値の用意
        $article->title = $request->title;
        $article->body  = $request->body;
        $article->timestamps = $request->false;

        //インスタンスに値を設定して保存
        $article->save();

        //登録したらindexに戻る
        return redirect('/articles');
    }


    public function destroy($id)
    {
        $article = Article::find($id);
        $article -> delete();
        return redirect('/articles');
    }
}
