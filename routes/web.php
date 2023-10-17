<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/v', function(){
  return view('pages.temp');
});

Route::get('/', [PagesController::class, 'article']);


Route::get('login',[LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])
->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])
->name('logout');


Route::get('register', [RegisterController::class, 'register']);
Route::post('store', [RegisterController::class, 'store'])->name('store');
