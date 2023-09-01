<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\Learning\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\Learning\TableController;
use App\Http\Controllers\Learning\TestController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\TestInputController;
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
// Route::get('/', function () {
//     return view('learning.welcome');
// });

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

// route -- view -- controller -- model (with some variants input)
Route::get('/testing-input-dummy', [TestInputController::class, 'index']);
Route::get('/testing-input', [TestInputController::class, 'test_input'])->name('input.get');
Route::get('/testing-form', [TestInputController::class, 'form']);
Route::get('/testing-view', [TestInputController::class, 'table']);
/** [/END LEARNING] */

/** [HOMEPAGE] */
Route::get('/', function () {
    return redirect()->route('administrator.dashboard');
});

/** [AUTH] */
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-process', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot.password');

/** [ADMINISTRATOR] */
Route::prefix('administrator')
    ->name('administrator.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'role:super,admin'])->name('dashboard');
        Route::get('/admin', [UserController::class, 'admin'])->middleware(['auth', 'role:super'])->name('admin');
        Route::get('/student', [UserController::class, 'student'])->middleware(['auth', 'role:super'])->name('student');
        Route::get('/item', [ItemController::class, 'index'])->middleware(['auth', 'role:super, admin'])->name('item');
        Route::get('/applicant-list', [ApplicantController::class, 'index'])->middleware(['auth', 'role:super,admin'])->name('applicant');
        Route::get('/return-list', [ReturnController::class, 'index'])->middleware(['auth', 'role:super,admin'])->name('return');
    });

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
