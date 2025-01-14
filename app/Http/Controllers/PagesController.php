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

        

    }


}
