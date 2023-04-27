<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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
Route::get('/single-product/{id}',[HomeController::class,'singleProduct'])->name('single.product');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/add-user',[UserController::class,'addUser'])->name('add.user');
    Route::get('/manage-user',[UserController::class,'manageUser'])->name('manage.user');
    Route::post('/new-user',[UserController::class,'saveUser'])->name('new.user');
    Route::get('/user-edit/{id}',[UserController::class,'editUser'])->name('user.edit');
    Route::post('/user-delete',[UserController::class,'deleteUser'])->name('user.delete');
    Route::post('/update-user',[UserController::class,'updateUser'])->name('update.user');

    Route::get('/add-product',[ProductController::class,'addProduct'])->name('add.product');
    Route::get('/manage-product',[ProductController::class,'manageProduct'])->name('manage.product');
    Route::post('/new-product',[ProductController::class,'saveProduct'])->name('new.product');
    Route::get('/product-edit/{id}',[ProductController::class,'editProduct'])->name('product.edit');
    Route::get('/product-status/{id}',[ProductController::class,'statusProduct'])->name('product.status');
    Route::post('/product-delete',[ProductController::class,'deleteProduct'])->name('product.delete');
    Route::post('/update-product',[ProductController::class,'updateProduct'])->name('update.product');
});

