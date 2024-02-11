<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;


class AdminArticleController extends Controller
{
  public function index(){
    $viewData['articles'] = Article::all();
    return view('admin.article.index')->with('viewData', $viewData);
  }
  public function create(){
    $viewData =[];
    $viewData['title'] = "Topic To Write About";
    return view('admin.article.create')->with('viewData', $viewData);
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

  public function edit($id)
  {
    $article = Article::findOrFail($id);
    $viewData = [];
    $viewData['id'] = $id;
    $viewData['title'] = $article->get_title();
    $viewData['body'] =  chunk_split($article->get_body());

    return view('admin.article.edit')->with('viewData', $viewData);
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

   public function show($id){
     
     $viewData['article'] = Article::findOrFail($id);
     return view('admin.article.show')->with('viewData', $viewData);
   }

}
