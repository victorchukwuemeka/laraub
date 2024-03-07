<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ClassController extends Controller
{
  public function article(){
      return $article = Article::all();
  }
}
