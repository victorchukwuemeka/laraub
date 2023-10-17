<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
  public function store(Request $request){
      //dd($request);
      $comments = new Comments();
      $article_id = $request->input('article_id');
      $user_id = $user_id_in_session = Auth::id();
      $comment = $request->input('comment');

      $comments->set_article_id($article_id);
      $comments->set_user_id($user_id);
      $comments->set_comment($comment);

      $comments->save();
      return back();
  }
}
