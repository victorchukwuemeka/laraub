<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProjectsComments;

class ProjectsCommentsController extends Controller
{
    public function store(Request $request)
    {    
        //dd($request->input('laravel_projects_id'));
        ProjectsComments::create([
            'parent_id' => $request->input('parent_id'),
            'user_id' => Auth::id(),
            'laravel_projects_id' => $request->input('laravel_projects_id'),
            'content' => $request->input('content')
        ]);

        return redirect()->back();
    }
}
