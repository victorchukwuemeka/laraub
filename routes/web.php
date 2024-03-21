<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserProjectsController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\UserSkillsController;
use App\Http\Controllers\UserCertificationsController;
use App\Http\Controllers\TutorialController;

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

Route::get('/try', function(){
  return view('try');
});



Route::get('/tutorial', function () {
    return view('tutorial');
})->name('tutorial');
// routes/web.php


//Route::get('/tutorial', [TutorialController::class, 'index'])->name('tutorial');
Route::post('/tutorial', [TutorialController::class, 'saveTutorial'])->name('save-tutorial');


Route::get('/', [PagesController::class, 'article'])->name("home");



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
Route::put('/users/{userId}/update', [UserProfileController::class, 'updateProfile'])
->name('user.update');

// Show user projects
Route::get('/projects', [UserProjectsController::class, 'projectsform'])
->name('projects');
Route::post('/projects', [UserProjectsController::class, 'store'])
->name('projects.store');

//experiences
Route::get('/experiences', [ExperiencesController::class, 'experiencesform'])
->name('experiences');
Route::post('/experiences', [ExperiencesController::class, 'store'])
->name('work_experience.store');

//skills
Route::get('/skills', [UserSkillsController::class, 'skillsform'])
->name('skills');
Route::post('/store/skills', [UserSkillsController::class, 'store'])
->name('skills.store');

//certifications
Route::get('/certificates', [UserCertificationsController::class, 'certificatesform'])
->name('certificates');
Route::post('/skills', [UserCertificationsController::class, 'store'])
->name('certifications.store');


// Add routes for other UserController actions as needed...
