<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function submit(ArticleRequest $req) {

        $article = new Article();
        $article->articleName = $req->input('articleName');
        $article->pseudonymName = $req->input('pseudonymName');
        $article->textArea1 = $req->input('textArea1');

        $article->save();

        return redirect()->route('home')->with('success', 'Данные успешно внесены в таблицу');

        /*$validation = $req->validate([
            'articleName' => 'required|min:5|max:100',
            'pseudonymName' => 'required|min:3|max:100',
            'textArea1' => 'required|min:5|max:1000'
    ]);*/
    }

    public function allData() {
        $article = Article::all();
       return view('article-data', ['data' => Article::all()]);
        
        //dd($article);
    }


}
