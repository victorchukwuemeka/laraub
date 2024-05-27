<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaravelProjects;

class AdminProjectsController extends Controller
{
  public function index()
  {
    $projects = LaravelProjects::orderBy('created_at', 'desc')->get();
    return view('admin.projects.index', compact('projects'));
  }

  public function destroy($id)
  {
    $project = LaravelProjects::findOrFail($id);
    $project->delete();
    return redirect()->route('admin.projects')
      ->with('success', 'Project deleted successfully.');
  }
  
}
