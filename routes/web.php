<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;

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
    return view('auth.login');
});

// Route::get('/', function () {
//     return view('products.create');
// });


//regis dan login
Route::get('/register', [RegisController::class,'show'])->name('register.show');
Route::post('/register', [RegisController::class,'perform'])->name('register.perform');
Route::get('/login', [AdminController::class,'show'])->name('login.show');
Route::post('login.perform', [AdminController::class,'perform'])->name('login.perform');
Route::get('login.out', [AdminController::class,'out'])->name('login.out');

//view
Route::get('/dashboard', [DashboardController::class,'show'])->name('dashboard.show');
Route::get('upload-produk', [DashboardController::class,'produk'])->name('upload-produk');


//produk
Route::resource('products', ProductController::class);

Route::get('products.index', [ProductController::class,'index'])->name('products.index');
Route::get('products.show', [ProductController::class,'show'])->name('products.show');
Route::get('products.edit', [ProductController::class,'edit'])->name('products.edit');
Route::post('products.store', [ProductController::class,'store'])->name('products.store');
Route::post('products.update', [ProductController::class,'update'])->name('products.update');
Route::post('products.destroy', [ProductController::class,'destroy'])->name('products.destroy');
