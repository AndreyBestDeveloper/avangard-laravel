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

    }


    public function publicationList() {

        $article = new Article;
        return view('publication-list', ['data' => $article->orderBy('id', 'desc')->get()]);
    }


    public function publicationText($id){
        $article = new Article;
        return view('publication-text', ['data' => $article->find($id)]);
    }

   
    public function publicationEdit($id){
        $article = new Article;
        return view('publication-edit', ['data' => $article->find($id)]);
    }

    public function publicationChange($id, ArticleRequest $req){

        $article = Article::find($id);
        $article->articleName = $req->input('articleName');
        $article->pseudonymName = $req->input('pseudonymName');
        $article->textArea1 = $req->input('textArea1');

        $article->save();

        return redirect()->route('publication-list')->with('success', 'Публикация была обновлена');
    }



    public function publicationDelete($id){
        Article::find($id)->delete();
        return redirect()->route('publication-list')->with('success', 'Публикация была удалена');
    }

}
