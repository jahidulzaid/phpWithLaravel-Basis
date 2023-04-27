<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/productAdd',[HomeController::class,'productAdd'])->name('productAdd');

Route::get('/entry',[HomeController::class,'productEntry']) ->name('pro.entry');
Route::get('/list',[HomeController::class,'proList'])->name('product.list');
Route::post('/productAdd',[HomeController::class,'productAdd'])->name('product.add');

Route::get('/category',[HomeController::class,'category'])->name('category');
Route::post('/catAdd',[HomeController::class,'catAdd'])->name('catAdd');

