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

    $articles = Article::all();
    $viewData = [];
    $viewData['articles'] = $articles;
    return view('pages.article')->with('viewData', $viewData);
  }

  public function create(){
    $viewData =[];
    $viewData['title'] = "Topic To Write About";
    return view('article.create')->with('viewData', $viewData);
  }

  public function store(Request $request){

     Article::validate($request);

     $article = Article::create([
       'title'=>$request->input('title'),
       'body' => $request->input('body'),
       'user_id' => Auth::id(),
     ]);
     //$article = new Article();
     //$title = $request->input('title');
     //$body = $request->input('body');
     //$user_id = $user_id_in_session = Auth::id();

     //$article->set_title($title);
     //$article->set_body($body);
     //$article->set_user_id($user_id);
     //$ok = $article->addRichTextAttributes($body);
     //dd($ok);
    // $article->save();
     //Article::create(['body' => $body]);
     return redirect()->route('home');
  }


  public function dashboard()
  {
    return $this->index();
  }

  public function update(Request $request, $id)
  {
    $incoming_id = $id;
    $article = Article::find($id);
    if ($article->get_id() == $incoming_id) {
      $article->update([
        'title'=>$request->input('title'),
        'body' => $request->input('body'),
        'user_id' => Auth::id(),
      ]);
     return redirect()->route('home')->with('success', 'Post updated successfully');
    }
    return back();
  }


  public function show($id){

    $comments = Comments::paginate(15)->sortDesc();
    $article = Article::findOrFail($id);

    $viewData = [];
    $viewData['id'] = $id;
    $viewData['title'] = $article->get_title();
    $viewData['user_id_in_session'] = Auth::id();
    $viewData['body'] =  chunk_split($article->body->toPlainText());
    $viewData['comments'] = $comments;
    $viewData['user_id'] = $article->get_user_id();

    return view('article.show')->with('viewData', $viewData);
  }

  public function delete($id){

    Article::destroy($id);
    return $this->index();
  }

  public function edit($id)
  {
    $article = Article::findOrFail($id);
    $viewData = [];
    $viewData['id'] = $id;
    $viewData['title'] = $article->get_title();
    $viewData['body'] =  chunk_split($article->body->toPlainText());

    return view('article.edit')->with('viewData', $viewData);
  }


}
