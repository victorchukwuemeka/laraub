<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserProfileController;



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

Route::get('/', [PagesController::class, 'article'])->name("name");


Route::get('login',[LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])
->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])
->name('logout');


Route::get('register', [RegisterController::class, 'register']);
Route::post('store', [RegisterController::class, 'store'])->name('store');



//route for users profile
Route::get('profile/{userId}', [UserProfileController::class, 'showProfile'])->name('user.show');

Route::get('/users/{userId}/edit', [UserProfileController::class, 'editProfileForm'])->name('user.edit');



// Update user profile
Route::put('/users/{userId}/update', [UserProfileController::class, 'updateProfile'])->name('user.update');
// Show user projects
Route::get('/users/{userId}/projects', [UserProfileController::class, 'showProjects'])->name('user.projects');

// Add routes for other UserController actions as needed...
