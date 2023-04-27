<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/product',[HomeController::class,'product'])->name('product');
Route::get('/details/{id}',[HomeController::class,'details'])->name('details');
Route::get('/category/{id}',[HomeController::class,'category'])->name('category');
