<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function publishSubmit(ArticleRequest $req) {

        $article = new Article();
        $article->articleName = $req->input('articleName');
        $article->pseudonymName = $req->input('pseudonymName');
        $article->textArea1 = $req->input('textArea1');

        $article->save();

        return redirect()->route('publication-list')->with('success', 'Данные успешно внесены в таблицу');

        /*$validation = $req->validate([
            'articleName' => 'required|min:5|max:100',
            'pseudonymName' => 'required|min:3|max:100',
            'textArea1' => 'required|min:5|max:1000'
        ]);*/
    }


    public function publicationList() {

        $article = new Article;
        return view('publication-list', ['data' => $article->orderBy('id', 'desc')->get()]);
    }


    public function publicationText($id){
        $article = new Article;
        return view('publication-text', ['data' => $article->find($id)]);
    }

   
    public function publicationUpdate($id){
        $article = new Article;
        return view('publication-update', ['data' => $article->find($id)]);
    }
/*
    public function publicationSubmit($id, ArticleRequest $req) {

        $article = Article::find($id);
        $article->articleName = $req->input('articleName');
        $article->pseudonymName = $req->input('pseudonymName');
        $article->textArea1 = $req->input('textArea1');

        $article->save();

        return redirect()->route('publication-text', $id)->with('success', 'Статья была обновлена');
    }
*/



}
