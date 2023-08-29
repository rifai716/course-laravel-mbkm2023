<?php

use App\Http\Controllers\Learning\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Learning\TableController;
use App\Http\Controllers\Learning\TestController;
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
Route::get('/', function () {
    return view('learning.welcome');
});

Route::get('/learning/test', function () {
    return view('learning.test');
});

Route::get('/learning/template', function () {
    return view('learning.crud_user');
});

Route::get('/learning/test-controller-lebih-panjang/{param1}', [TestController::class, 'index'])->name('testing.parameter');
Route::get('/learning/artikel/{slug}', [ArticleController::class, 'view']);
Route::get('/learning/table', [TableController::class, 'view']);

/** [AUTH] */
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot.password');

