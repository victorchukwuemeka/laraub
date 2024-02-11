<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article\ArticleController;

Route::get('/home', [ArticleController::class, 'index']);
//->name('article.index');


Route::get('/show_article/{id}', [ArticleController::class, 'show'])
->name('article.show');
