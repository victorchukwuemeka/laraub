<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article\ArticleController;

Route::get('/home', [ArticleController::class, 'index']);
//->name('article.index');

Route::get('/create_article', [ArticleController::class, 'create']);


Route::get('/article/{id}/edit', [ArticleController::class, 'edit']);


Route::put('/article/{id}', [ArticleController::class, 'update'])
 ->name('article.update');

Route::delete('/delete_article/{id}', [ArticleController::class, 'delete'])
->name('article.destroy');

Route::post('/post_article', [ArticleController::class, 'store']);
//->name('article.destroy');

Route::get('/show_article/{id}', [ArticleController::class, 'show'])
->name('article.show');
