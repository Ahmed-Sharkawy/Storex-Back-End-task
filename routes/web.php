<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\User\UserController;

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

Route::get('/login', [AuthController::class, 'loginView'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login')->middleware('guest');

Route::middleware('auth')->group(function () {

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', [MovieController::class, 'index'])->name('home');

    Route::resource('users', UserController::class);
    Route::get('users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
    Route::resource('categorys', CategoryController::class);
    Route::get('categorys/{category}/destroy', [CategoryController::class, 'destroy'])->name('categorys.destroy');
    Route::resource('movies', MovieController::class);
    Route::get('movies/{movie}/destroy', [MovieController::class, 'destroy'])->name('movies.destroy');

});
