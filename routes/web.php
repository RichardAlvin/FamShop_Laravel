<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardBestsellerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardCommentController;
use App\Http\Controllers\CartController;
use App\Models\Cart;
use App\Models\Product;
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
    $bestsellers = Product::select("*")->where('bestseller', 1)->get();
    return view('home', [
        'title' => 'AsanArizona | Home',
        'active' => 'home',
        'bestsellers' => $bestsellers
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
    return view('comment', [
        'title' => 'AsanArizona | Comment',
        'active' => 'comment'
    ]);
})->middleware('auth');

Route::post('/comment', [CommentController::class, 'store'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');

Route::resource('/dashboard/products', DashboardProductController::class)->middleware('admin');

Route::resource('/dashboard/users', DashboardUserController::class)->middleware('admin');

Route::resource('/dashboard/bestsellers', DashboardBestsellerController::class)->middleware('admin');

Route::get('/dashboard/comments/{id}', [DashboardCommentController::class, 'index'])->middleware('admin');
Route::delete('/dashboard/comments', [DashboardCommentController::class, 'delete'])->middleware('admin');

Route::resource('/cart', CartController::class)->middleware('auth');

Route::get('/dashboard/carts/{id}', function ($id) {
    return view('dashboard.cart.index', [
        'title' => 'AsanArizona | Cart',
        'active' => 'users',
        'carts' => Cart::select("*")->where('user_id', $id)->get()
    ]);
});

Route::delete('/dashboard/cart/{id}', function ($id) {
    Cart::destroy($id);
    return redirect()->back();
});
