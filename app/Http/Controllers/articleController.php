<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class articleController extends Controller
{
    public function getAll(){
    $article = Article::all();
    return view('homearticle',['article'=> $article]);
    }

    public function getById($id){
    $article = Article::find($id);
    return view('article',['article'=> $article, 'id' => $id]);
    }
}
