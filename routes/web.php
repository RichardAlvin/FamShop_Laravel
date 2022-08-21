<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardBestsellerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        'title' => 'AsanArizona | Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'AsanArizona | About',
        'active' => 'about'
    ]);
});

Route::get('/product', [ProductController::class, 'index']);

Route::get('/comment', function () {
    return view('comment');
});

Route::post('/comment', [CommentController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');

Route::resource('/dashboard/products', DashboardProductController::class)->middleware('admin');

Route::resource('/dashboard/users', DashboardUserController::class)->middleware('admin');

Route::resource('/dashboard/bestsellers', DashboardBestsellerController::class)->middleware('admin');
