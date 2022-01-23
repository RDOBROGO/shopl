<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/users/list', [UserController::class, 'index'])->middleware('auth')->name('users');
Route::get('/users/delete/{id}', [UserController::class, 'destroy'])->middleware('auth')->name('delete');

Route::get('/user/{user}', [UserController::class, 'show'])->middleware('auth')->name('user');
Route::get('/user/edit/{user}', [UserController::class, 'edit'])->middleware('auth')->name('user.edit');
Route::post('/user/{user}', [UserController::class, 'update'])->middleware('auth')->name('user.update');

Route::get('/products', [ProductController::class, 'index'])->middleware('auth')->name('products');
Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth')->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->middleware('auth')->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->middleware('auth')->name('show');
Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->middleware('auth')->name('products.edit');
Route::post('/products/{product}', [ProductController::class, 'update'])->middleware('auth')->name('products.update');
Route::get('/products/delete/{product}', [ProductController::class, 'destroy'])->middleware('auth')->name('products.delete');

Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth')->name('categories');
Route::get('/categories/create', [CategoryController::class, 'create'])->middleware('auth')->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->middleware('auth')->name('categories.store');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->middleware('auth')->name('categories.show');
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->middleware('auth')->name('categories.edit');
Route::post('/categories/{category}', [CategoryController::class, 'update'])->middleware('auth')->name('categories.update');
Route::get('/categories/delete/{category}', [CategoryController::class, 'destroy'])->middleware('auth')->name('categories.delete');

Route::get('/product/{product}', [ProductController::class, 'view'])->name('product');

Route::get('/cart/{id}', [CartController::class, 'store'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::post('/order/summary', [OrderController::class, 'show'])->name('order.summary');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
