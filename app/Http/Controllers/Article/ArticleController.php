<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        //dd($articles);
        return view('pages.article', ['viewData' => ['articles' => $articles]]);
    }

    /**
     * Show the form for creating a new article.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create', ['viewData' => ['title' => 'Topic To Write About']]);
    }

    /**
     * Store a newly created article in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        //Article::validateRequest($request);

        // Create the article
        Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'notes' => $request->notes,
            'slug' => $request->slug,
            'thumbnail' => $request->thumbnail,
            'status' => $request->status,
            'user_id' => Auth::id(),
        ]);
        
        return redirect()->route('home')->with('success', 'Article created successfully!');
    }

    /**
     * Display the specified article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $comments = Comments::paginate(15)->sortDesc();

        $viewData = [
            'id' => $id,
            'title' => $article->title,
            'user_id_in_session' => Auth::id(),
            'body' => chunk_split($article->body->toPlainText()),
            'comments' => $comments,
            'user_id' => $article->user_id,
        ];
        //dd('$viewData');

        return view('article.show', ['viewData' => $viewData]);
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        $viewData = [
            'id' => $id,
            'title' => $article->title,
            'body' => chunk_split($article->body->toPlainText()),
        ];

        return view('article.edit', ['viewData' => $viewData]);
    }

    /**
     * Update the specified article in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        Article::validate($request);

        // Find the article
        $article = Article::findOrFail($id);

        // Update the article
        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'notes' => $request->notes,
            'slug' => $request->slug,
            'thumbnail' => $request->thumbnail,
            'status' => $request->status,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('home')->with('success', 'Article updated successfully!');
    }

    /**
     * Remove the specified article from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Article::destroy($id);
        return redirect()->route('home')->with('success', 'Article deleted successfully!');
    }

    /**
     * Display the dashboard with articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return $this->index();
    }
}