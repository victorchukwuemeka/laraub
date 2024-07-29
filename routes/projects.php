<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Projects\ProjectsController;
use App\Http\Controllers\ProjectsCommentsController;
use App\Http\Controllers\SearchController;


Route::get('/',[
  ProjectsController::class, 'index'
])->name('home');

Route::get('/projects/create', [ProjectsController::class, 'create'])
->name('projects.create');
Route::post('/projects', [ProjectsController::class, 'store'])
->name('projects.store');
Route::get('/projects/{project}', [ProjectsController::class, 'show'])->name('projects.show');
Route::get('/projects/{project}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{project}', [ProjectsController::class, 'update'])->name('projects.update');
Route::delete('/projects/{project}', [ProjectsController::class, 'destroy'])->name('projects.destroy');


Route::get('/search',[SearchController::class, 'search'])->name('search');


//project comment 
Route::post('/project/comments', [ProjectsCommentsController::class, 'store'])
 ->name('project.comments.store');