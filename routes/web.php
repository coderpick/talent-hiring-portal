<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

/* User Routes */
Route::group(['prefix' => 'user/', 'middleware' => ['auth', 'verified']], function () {
    Route::controller(UserDashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('user.dashboard');
        Route::get('profile', 'profile')->name('user.profile');
    });
    Route::controller(QuizController::class)->group(function () {
        Route::get('quiz/guide', 'quizGuide')->name('quiz.guide');
        Route::get('quiz', 'quizCreate')->name('quiz.create');
        Route::post('quiz/store', 'quizStore')->name('quiz.store');
        Route::get('quiz/score', 'quizScore')->name('quiz.score');
    });
});

/* admin routes */
Route::get('admin', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin', [LoginController::class, 'adminLogin'])->name('admin.login');

Route::group(['prefix' => 'admin/', 'middleware' => ['auth:admin']], function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('admin.dashboard');
    });
});
