<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;



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

    $request->validate([
      'title' => 'required|string|max:255',
      'body' => 'required|string',
      'slug' => 'nullable|string|unique:article,slug',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
      'thumbnail' => 'nullable|string',
      'status' => 'required|in:draft,published',
    ]);

     // Handle Image Upload
     $imagePath = null;
     if ($request->hasFile('image')) {
         $imagePath = $request->file('image')->store('images', 'public');
     }

    Article::create([
      'title' => $request->title,
      'body' => $request->body,
      'notes' => $request->notes,
      'slug' => $request->slug ?? Str::slug($request->title),
      'thumbnail' => $imagePath,
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
