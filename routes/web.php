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
Route::post('login.out', [AdminController::class,'out'])->name('login.out');

//view
Route::get('dashboard', [DashboardController::class,'show'])->name('dashboard');
Route::get('upload-produk', function () { return view('products.create'); });

Route::resource('products', ProductController::class);