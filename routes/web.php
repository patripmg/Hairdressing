<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
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
    return view('static.home');
})->name('home');


Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');


//crear producto nuevo
Route::get('/newproduct', [ProductController::class, 'create'])->name('new');
Route::post('/newproduct', [ProductController::class, 'store']);



Route::get('/newproduct/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/newproduct/{product}', [ProductController::class, 'update'])->name('products.update'); 
Route::delete('/newproduct/{product}', [ProductController::class, 'destroy'])->name('products.delete'); 


Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('static.home');
})->name('home');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
