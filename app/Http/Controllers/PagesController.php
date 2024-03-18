<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ClassController;

class PagesController extends Controller
{

    public function article()
    {

        $all_class = new ClassController();

        $article = $all_class->article();
        //$article_body = $all_class->body($article);
        //dd($article_body);
        $viewData = [];
        $viewData['articles'] = $article;
        return view('pages.article')->with('viewData', $viewData);

    }


}
