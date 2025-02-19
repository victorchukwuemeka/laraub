<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\Auth\Register;
use App\Http\Controllers\Admin\AdminProjectsController;
use App\Http\Controllers\Admin\AdminAdsController;
use App\Http\Controllers\Admin\AdminSubscribersController;
use App\Http\Controllers\Admin\UsersController;





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
  Route::delete('/admin/ads/{id}', [AdminAdsController::class, 'destroy'])
    ->name('admin.ads.destroy');

  Route::post('/verify-ad/{id}', [AdminAdsController::class, 'verify'])
    ->name('admin.verify-ad');

  //route for handling subcribers from admin
  Route::get('admin/subscribers',[AdminSubscribersController::class, 'index'])
     ->name('subscribers-admin');   
  
     
  //route for users in the admin 
  Route::get('admin/users', [UsersController::class, 'index'])->name('admin-users');


  Route::get('admin/article', [AdminArticleController::class, 'admin_article_page'])
  ->name('admin.article');
  Route::get('admin/create/article', [AdminArticleController::class, 'create_article'])
  ->name('admin.create.article');
  Route::post('admin/store/article', [AdminArticleController::class, 'store_article'])
  ->name('admin.store.article');


  

});
