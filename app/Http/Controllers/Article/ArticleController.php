<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comments;
use App\Http\Controllers\PagesController;
use App\Models\Article;
use App\Models\User;


class ArticleController extends Controller
{
  public function index(){
      $pages = new PagesController();
      $article_page = $pages->article();
      return $article_page;
  }


  public function dashboard()
  {
    return $this->index();
  }


  public function show($id){

    $comments = Comments::paginate(15)->sortDesc();
    $article = Article::findOrFail($id);
    $one = 1;
    $user = User::findOrFail($one);
    $user_id = $user->id;
    $viewData = [];
    $viewData['id'] = $id;
    $viewData['title'] = $article->get_title();
    $viewData['body'] =  chunk_split($article->get_body());
    $viewData['comments'] = $comments;
    $viewData['user_id'] = $user_id;

    return view('article.show')->with('viewData', $viewData);
  }


}
