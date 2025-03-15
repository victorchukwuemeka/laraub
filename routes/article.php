<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article\ArticleController;

//Route::get('/home', [ArticleController::class, 'index']);
//->name('article.index');

//Route::get('/admin/article', [ArticleController::class, 'index'])
//->name('admin.article');



Route::middleware(['auth'])->group(function () {
    
    Route::get('/create/article', [ArticleController::class, 'create'])
        ->name('create.article');

    Route::get('/article/{id}/edit', [ArticleController::class, 'edit'])
        ->name('edit.article');

    Route::put('/article/{id}', [ArticleController::class, 'update'])
        ->name('article.update');

    Route::delete('/delete/article/{id}', [ArticleController::class, 'delete'])
        ->name('delete.article');

    Route::post('/post/article', [ArticleController::class, 'store'])
        ->name('post.article');
});



Route::get('article/index',[ArticleController::class, 'index'])
->name('article.index');

Route::get('/show_article/{id}', [ArticleController::class, 'show'])
->name('article.show');


