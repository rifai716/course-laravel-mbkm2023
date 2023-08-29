<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_apa_aja', function() {
    return view('test');
});



Route::get('/test-controller-lebih-panjang/{param1}', [TestController::class, 'index'])->name('testing.parameter');
Route::get('/artikel/{slug}', [ArticleController::class, 'view']);
Route::get('/table', [TableController::class, 'view']);


Route::get('/crud-user', function() {
    return view('crud_user');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot.password');