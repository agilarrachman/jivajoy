<?php

use App\Http\Controllers\AdminAccountController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
use App\Models\Product;
use App\Models\User;

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
    return view('index', [
        "active" => "Beranda"
    ]);
});

Route::get('/team', function () {
    return view('team', [
        "active" => "Tim"
    ]);
});

Route::get('/berita', function () {
    return view('news2', [
        "active" => "Berita"
    ]);
});

Route::get('/produk', function () {
    return view('product', [
        "active" => "Produk",
        'products' => Product::all()
    ]);
});

Route::get('/dashboard', function () {
    return view('admin.dashboard', [
        "active" => "beranda",
    ]);
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/createProfile', function () {
    return view('create-profile');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/create-profile', [ProfileController::class, 'index']);
Route::post('/store-profile', [ProfileController::class, 'store']);
Route::get('/profile', function () {
    return view('profile', [
        'user' => User::where('id', auth()->user()->id)->first()
    ]);
});
Route::put('/profile/{user:username}', [ProfileController::class, 'update'])->middleware('auth');
Route::delete('/profile/{user:username}', [ProfileController::class, 'destroy'])->middleware('auth');
Route::get('/profile/{user:id}', [ProfileController::class, 'show'])->middleware('auth');

Route::resource('/dashboard/customers', AdminCustomerController::class)->middleware('auth');
Route::resource('/dashboard/admin', AdminAccountController::class)->middleware('auth');

Route::resource('/dashboard/stocks', StockController::class)->middleware('auth');
Route::resource('/dashboard/products', ProductController::class)->middleware('auth');
Route::resource('/dashboard/keranjang', CartController::class)->middleware('auth');




