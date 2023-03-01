<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('program')->group(function(){
    Route::get('/program-1', [ProgramController::class, 'program1']);
    Route::get('/program-2', [ProgramController::class, 'program2']);
});

Route::prefix('product')->group(function(){
    Route::get('/product-1', [ProductController::class, 'product1']);
    Route::get('/product-2', [ProductController::class, 'product2']);
});

Route::get('/news/{id}', [NewsController::class, 'index']);

Route::get('/about-us', function () {
    return "About Us";
});

Route::resource('/contact', ContactController::class);