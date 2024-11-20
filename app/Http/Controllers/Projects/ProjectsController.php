<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaravelProjects;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Ad;


class ProjectsController extends Controller
{
  public function index(){

    $projects = LaravelProjects::orderBy('created_at', 'desc')->paginate(15);

    // Fetch the latest verified ad
    $sponsors = Ad::where('verified', true)->orderBy('created_at', 'desc')->paginate(6);
    return view('projects.index', compact('projects','sponsors'));
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
            'github_repo' => $request->input('github_profile')
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

  public function show(LaravelProjects $project)
  {   
     //increasing the view count.
     $project->increment('view_count');

     //adding six projects to the shw page .
     $relatedProjects = LaravelProjects::where('id', '!=', $project->id)
                         ->inRandomOrder()
                         ->take(6)->get();

     return view('projects.show-project', compact('project', 'relatedProjects'));
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
