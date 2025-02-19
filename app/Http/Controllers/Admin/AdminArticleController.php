<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;


class AdminArticleController extends Controller
{
  /**public function index(){
    $viewData['articles'] = Article::orderBy('created_at', 'desc')->get();
    return view('admin.article.index')->with('viewData', $viewData);
  }*/
  
  public function admin_article_page(){
    $viewData['articles'] = Article::orderBy('created_at','desc')->get();
    return view('admin.article.index')->with('viewData', $viewData);
  }

  public function create_article(){
    return view('admin.article.create');
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

  public function store_article(Request $request){
    
    Article::create([
      'title' => $request->title,
      'body' => $request->body,
      'notes' => $request->notes,
      'slug' => $request->slug,
      'thumbnail' => $request->thumbnail,
      'status' => $request->status,
      'user_id' => Auth::id(),
    ]);

    return redirect()->route('admin.article')->with('created');
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
