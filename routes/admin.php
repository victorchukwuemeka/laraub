<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\Auth\Register;


Route::get('/alchemy97',[Register::class, 'showRegistrationForm']);
Route::post('/admin/register/alchemy97', [Register::class, 'register']);

Route::middleware(['admin'])->group(function () {
    // Admin-only routes or controllers go here

    Route::get('/admin/article', [AdminArticleController::class, 'index'])
    ->name('admin.article');

    Route::get('/admin/create/article', [AdminArticleController::class, 'create'])
    ->name('admin.create.article');


    Route::get('/admin/article/{id}/edit', [AdminArticleController::class, 'edit'])
    ->name('admin.edit.article');


    Route::put('/admin/article/{id}', [AdminArticleController::class, 'update'])
     ->name('admin.article.update');

    Route::delete('/admin/delete/article/{id}', [AdminArticleController::class, 'delete'])
    ->name('admin.article.destroy');

    Route::post('/admin/post/article', [AdminArticleController::class, 'store'])
    ->name('admin.post.article');

    Route::get('/admin/show/article/{id}', [AdminArticleController::class, 'show'])
    ->name('admin.show.article');

});
