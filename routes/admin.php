<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\Auth\Register;
use App\Http\Controllers\Admin\AdminProjectsController;
use App\Http\Controllers\Admin\AdminAdsController;
use App\Http\Controllers\Admin\AdminSubscribersController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AdminBlogPostController;




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

  //route for admin ads
  Route::get('/admin/ads',[AdminAdsController::class, 'index'])
   ->name('admin.ads.index');
  Route::post('/verify-ad/{id}', [AdminAdsController::class, 'verify'])
    ->name('admin.verify-ad');

  //route for handling subcribers from admin
  Route::get('admin/subscribers',[AdminSubscribersController::class, 'index'])
     ->name('subscribers-admin');   
  
  //route for users in the admin 
  Route::get('admin/users', [UsersController::class, 'index'])->name('admin-users');





  //route for admin blog faeture
  Route::get('admin/blog', [AdminBlogPostController::class, 'index'])->name('admin-blog');

  Route::get('admin/blog/create', [AdminBlogPostController::class, 'create'])
    ->name('admin.blog-posts.create');
  
  Route::get('admin/blog/{id}/edit', [AdminBlogPostController::class, 'edit'])
        ->name('edit.article');

  Route::put('admin/blog/{id}', [AdminBlogPostController::class, 'update'])
    ->name('article.update');
  
   Route::delete('admn/delete/blog/{id}', [AdminBlogPostController::class, 'delete'])
        ->name('admin.article');
  
  Route::post('admin/blog/post', [AdminBlogPostController::class, 'store'])
        ->name('admin.blog-posts.store');

});
