<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\Auth\Register;


Route::get('/alchemy97',[Register::class, 'showRegistrationForm']);
Route::post('/admin/register/alchemy97', [Register::class, 'register']);

Route::middleware(['admin'])->group(function () {
    // Admin-only routes or controllers go here

    
    Route::get('/admin/show/article/{id}', [AdminArticleController::class, 'show'])
    ->name('admin.show.article');

});
