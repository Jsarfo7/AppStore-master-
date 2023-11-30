<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


route::get('/home',[HomeController::class, 'index'])->
middleware('auth')->name('home');




// Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');

// Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
// Route::get('/admin/approve/{id}', 'AdminController@approve')->name('admin.approve');
// Route::get('/admin/deny/{id}', 'AdminController@deny')->name('admin.deny');

// Route::get('/app-requests/create', function () {
//     return view('app_requests.create');
// })->name('app-request-create');



route::get('post', [HomeController::class, 'post']);
middleware(['auth', 'admin']);


Route::post('/submit-form', [AdminController::class, 'handleFormSubmission'])->name('form.submit');


// // Route for the admin dashboard
// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'admin'])->name('admin.dashboard');

// Route::post('/submit-app', [UserController::class, 'submitAppRequest'])->middleware('auth')->name('submit.app');

// // Routes for approving/denying app requests in the admin dashboard
// Route::post('/admin/approve-request/{id}', [AdminController::class, 'approveRequest'])->middleware(['auth', 'admin'])->name('approve.request');
// Route::post('/admin/deny-request/{id}', [AdminController::class, 'denyRequest'])->middleware(['auth', 'admin'])->name('deny.request');

// // Route for the moderator dashboard
// Route::get('/moderator/dashboard', [ModeratorController::class, 'dashboard'])->middleware(['auth', 'moderator'])->name('moderator.dashboard');

// // Route for deleting comments in the moderator dashboard
// Route::post('/moderator/delete-comment/{commentId}', [ModeratorController::class, 'deleteComment'])->middleware(['auth', 'moderator'])->name('delete.comment');

// // Route for submitting apps
// Route::post('/submit-app', [AppController::class, 'submitApp'])->middleware('auth')->name('submit.app');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
