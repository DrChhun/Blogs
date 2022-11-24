<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CollectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;

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
    return view('user.home');
});

Route::get('/', [UserController::class, "home"]);
Route::get('/content/{id}', [UserController::class, "detail"]);
Route::post('/store', [CollectController::class, "message"]);
Route::get('/cate/auto', [ContentController::class, "auto"]);
Route::get('/cate/mobile', [ContentController::class, "mobile"]);
Route::get('/cate/tips', [ContentController::class, "tips"]);


Route::get('/post', [DashboardController::class, "post"]);
Route::post('/posting', [ContentController::class, "posting"]);
Route::get('/dashboard', [DashboardController::class, "index"]);
Route::get('/edit', [DashboardController::class, "editpage"]);
Route::get('/delete/{id}', [DashboardController::class, "destroy"]);

Route::prefix('admin')->group(function() {

    Route::get('/login', [AdminController::class, "loginForm"])->name('login');
    Route::post('/login', [AdminController::class, "login"]);
    
    Route::middleware('admin')->group(function () {
        Route::get("/", [DashboardController::class, "overview"]);
        Route::get('/overview', [DashboardController::class, "overview"]);
    });

});
