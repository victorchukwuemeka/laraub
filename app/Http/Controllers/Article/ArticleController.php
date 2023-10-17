<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comments;
use App\Http\Controllers\PagesController;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

  public function create(){
    $viewData =[];
    $viewData['title'] = "Topic To Write About";
    return view('article.create')->with('viewData', $viewData);
  }


  public function store(Request $request){

     Article::validate($request);
     //Article::create([
    //   'article-trixFields' => request('article-trixFields'),
    // ]);

     $article = new Article();
     $title = $request->input('title');
     $body = $request->input('body');
     $user_id = $user_id_in_session = Auth::id();

     $article->set_title($title);
     $article->set_body($body);
     $article->set_user_id($user_id);
     $article->save();
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


  public function edit($id)
  {
    $article = Article::findOrFail($id);
    $viewData = [];
    $viewData['id'] = $id;
    $viewData['title'] = $article->get_title();
    $viewData['body'] =  chunk_split($article->get_body());

    return view('article.edit')->with('viewData', $viewData);
  }

  public function update(Request $request, $id)
  {
     //dd($request);
    $incoming_id = $id;
    //dd($incoming_id);
    //Article::validate($request);
    $article = Article::find($id);
    //dd($article_id->get_id());
    /*$article->update([
      'title' => ,
      "body"  => $request->input('body'),
    ]);*/

    if ($article->get_id() == $incoming_id) {

      $title =  $request->input('title');
      $body = $request->input('body');
      $user_id = $user_id_in_session = Auth::id();

      $article->set_title($title);
      $article->set_body($body);
      $article->set_user_id($user_id);
      $article->save();
     return $this->show($id);
    }
    return back();

  }

  public function delete($id){
    Article::destroy($id);
    return $this->index();
  }


}
