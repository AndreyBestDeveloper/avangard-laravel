<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function submit(ArticleRequest $req) {
        /*$validation = $req->validate([
            'articleName' => 'required|min:5|max:100',
            'pseudonymName' => 'required|min:3|max:100',
            'textArea1' => 'required|min:5|max:1000'
    ]);*/
    }
}
