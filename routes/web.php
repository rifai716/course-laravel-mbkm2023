<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\Learning\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\Learning\TableController;
use App\Http\Controllers\Learning\TestController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

/** [LEARNING] */
// route -- view
Route::get('/', function () {
    return view('learning.welcome');
});

// route -- view
Route::get('/learning/test', function () {
    return view('learning.test');
});

// route -- view (with blade templating)
Route::get('/learning/template', function () {
    return view('learning.crud_user');
});

// route -- view -- controller (with some variants input)
Route::get('/learning/test-controller-lebih-panjang/{param1}', [TestController::class, 'index'])->name('testing.parameter');
Route::get('/learning/artikel/{slug}', [ArticleController::class, 'view']);
Route::get('/learning/table', [TableController::class, 'view']);

/** [AUTH] */
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot.password');

/** [ADMINISTRATOR] */  
Route::prefix('administrator')
->name('administrator.')    
->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin', [UserController::class, 'admin'])->name('admin');
    Route::get('/student', [UserController::class, 'student'])->name('student');
    Route::get('/item', [ItemController::class, 'index'])->name('item');
    Route::get('/applicant-list', [ApplicantController::class, 'index'])->name('applicant');
    Route::get('/return-list', [ReturnController::class, 'index'])->name('return');
});

