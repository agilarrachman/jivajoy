<?php

use App\Http\Controllers\AdminAccountController;
use App\Http\Controllers\AdminCartController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GeminiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Models\Cart;
use App\Models\Order;
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

Route::get('/konseling', function () {
    return view('index', [
        "active" => "Konsultasi"
    ]);
});

Route::get('/dashboard/order-items/daily', [OrderItemController::class, 'getOrderItemsPerDay']);

Route::get('/dashboard', function () {
    return view('admin.dashboard', [
        "active" => "Beranda",
        'customerCount' => User::where('role', 'Customer')->count(),
        'orderCount' => Order::count(),
        'warmStock' => Product::where('varian', 'Warm')->value('stok'),
        'hotStock' => Product::where('varian', 'Hot')->value('stok'),
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

Route::get('/product', function () {
    return view('product', [
        "active" => "Produk",
        'products' => Product::where('stok', '>', 0)->get()
    ]);
});

Route::get('/status', function () {
    return view('show-order-status', [
        "active" => "Pesanan",
        'carts' => Cart::where('id_customer', auth()->user()->id)->get(),
        'total_harga' => Cart::where('id_customer', auth()->user()->id)->sum('total_harga')
    ]);
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
        'user' => User::where('id', auth()->user()->id)->first(),
        "active" => "Profile",
    ]);
});
Route::put('/profile/{user:username}', [ProfileController::class, 'update'])->middleware('auth');
Route::delete('/profile/{user:username}', [ProfileController::class, 'destroy'])->middleware('auth');
Route::get('/profile/{user:id}', [ProfileController::class, 'show'])->middleware('auth');

Route::get('/password', function () {
    return view('password', [
        'user' => User::where('id', auth()->user()->id)->first(),
        "active" => "Profile",
    ]);
});

Route::put('/password/{user:username}', [ProfileController::class, 'updatePassword'])->middleware('auth');

Route::resource('/dashboard/customers', AdminCustomerController::class)->middleware('auth');
Route::resource('/dashboard/admin', AdminAccountController::class)->middleware('auth');
Route::get('/dashboard/profile', function () {
    return view('admin.profile', [
        "active" => "Profil",
    ]);
});
Route::get('/dashboard/password', function () {
    return view('admin.password', [
        "active" => "Password",
        'user' => User::where('id', auth()->user()->id)->first(),
    ]);
});

Route::resource('/carts', CartController::class)->middleware('auth');
Route::resource('/orders', OrderController::class)->middleware('auth');
Route::get('/order/checkout', [OrderItemController::class, 'checkout']);
Route::resource('/checkout', OrderItemController::class)->middleware('auth');

Route::resource('/dashboard/stocks', StockController::class)->middleware('auth');
Route::resource('/dashboard/products', ProductController::class)->middleware('auth');
Route::get('/dashboard/products/{product}/stocks', [ProductController::class, 'getStocks']);

Route::resource('/dashboard/carts', AdminCartController::class)->middleware('auth');
Route::resource('/dashboard/orders', AdminOrderController::class)->middleware('auth');

Route::post('/question', [GeminiController::class, 'index']);
