<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[HomeController::class,'index'])->name('home');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified']);
//->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});

Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard.dashboard');
Route::get('/add-product',[ProductController::class,'addProduct'])->name('add.product');
Route::get('/manage-product',[ProductController::class,'manageProduct'])->name('manage.product');
Route::post('/new-product',[ProductController::class,'saveProduct'])->name('new.product');

