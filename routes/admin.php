<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\Auth\Register;
use App\Http\Controllers\Admin\AdminProjectsController;






Route::get('/alchemy97',[Register::class, 'showRegistrationForm']);
Route::post('/admin/register/alchemy97', [Register::class, 'register']);

Route::middleware(['admin'])->group(function () {
    // Admin-only routes or controllers go here
   Route::get('admin/projects',[AdminProjectsController::class, 'index'])
     ->name('admin.projects');

  Route::delete('admin/projects/{project}', [AdminProjectsController::class, 'destroy'])
    ->name('admin.projects.destroy');

    Route::get('/admin/show/article/{id}', [AdminArticleController::class, 'show'])
    ->name('admin.show.article');

});
