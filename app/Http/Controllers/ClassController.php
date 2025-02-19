<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ClassController extends Controller
{
  public function article(){
      return $article = Article::all();
  }

   public function home_page()
   {
    return view('home.index');
   }

  /*public function body(Article $article)
  {
    $this->article();
    return $article_body =  $article->body;
  }*/
}
