<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProjects;
use Illuminate\Support\Facades\Auth;

class UserProjectsController extends Controller
{
    public function projectsform()
    {
      return view("profile.projects.projects-form");
    }

    public function store(Request $request)
    {
      //dd($request);
      $request->validate([
        'project_name' => 'required|string',
        'description' => 'nullable|string',
        'link' => 'nullable|url',
        'technologies_used' => 'required|string',
      ]);
      $user_projects = new UserProjects();
      
      $userId = Auth::id();
      $user_projects->set_user_id($userId);
      $user_projects->set_project_name($request->input('project_name'));
      $user_projects->set_description($request->input('description'));
      $user_projects->set_link($request->input('link'));
      $user_projects->set_technologies_used($request->input('technologies_used'));
      $user_projects->save();
      return redirect()->route('user.show', ['userId' => $userId]);
    }
}


