<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Projects\ProjectsController;

Route::get('projects',[
  ProjectsController::class, 'index'
])->name('projects');

Route::get('/projects/create', [ProjectsController::class, 'create'])
->name('projects.create');
Route::post('/projects', [ProjectsController::class, 'store'])
->name('projects.store');
Route::get('/projects/{project}', [ProjectsController::class, 'show'])->name('projects.show');
Route::get('/projects/{project}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{project}', [ProjectsController::class, 'update'])->name('projects.update');
Route::delete('/projects/{project}', [ProjectsController::class, 'destroy'])->name('projects.destroy');
