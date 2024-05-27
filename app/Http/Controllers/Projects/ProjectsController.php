<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaravelProjects;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class ProjectsController extends Controller
{
  public function index(){
     //$projects = LaravelProjects::all();
     $projects = LaravelProjects::orderBy('created_at', 'desc')->get();
    return view('projects.index', compact('projects'));
  }

  public function create(){
    return view('projects.create');
  }

  public function store(Request $request){
    //dd($request->all());
    if(Auth::id()){
      $request->validate([
        'name' => 'required',
        // Add validation rules for other fields here
      ]);
       if ($request->hasFile('image')) {
          $image = time().".".$request->file('image')
          ->extension();
          $image_content = file_get_contents($request->file('image')
          ->getRealPath());
          Storage::disk('public')->put(
            $image , $image_content
          );
          LaravelProjects::create([
            'name' => $request->input('name'),
            'user_id' => Auth::id(),
            'image' => $image,
            'motto' => $request->input('motto'),
            'description' => $request->input('description'),
            'website' => $request->input('website'),
            'github_repo' => $request->input('github_repo')
          ]);
          return redirect()->route('home')
                 ->with('success', 'Project created successfully.');
       }else {
         LaravelProjects::create($request->all());

         return redirect()->route('home')
                 ->with('success', 'Project created successfully.');
       }
    }else {
     return redirect()->route('login');
    }

  }

  public function show(LaravelProjects $projects)
  {
     return view('projects.show', compact('project'));
  }


  public function edit(LaravelProjects $project){
    return view('projects.edit', compact('project'));
  }

  public function update(Request $request, LaravelProjects $project){
      $request->validate([
        'name' => 'required',
        // Add validation rules for other fields here
      ]);

      $project->update($request->all());

      return redirect()->route('projects.index')
      ->with('success', 'Project updated successfully');
   }

   public function destroy(LaravelProjects $project){
     $project->delete();

     return redirect()->route('projects.index')
     ->with('success', 'Project deleted successfully');
   }

}
