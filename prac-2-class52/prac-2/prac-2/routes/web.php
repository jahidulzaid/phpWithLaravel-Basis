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
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/single.product/{id}',[HomeController::class, 'singleProduct'])->name('single.product');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.dashboard');

    //user controller
    Route::get('/add-user',[UserController::class, 'addUser'])->name('admin.user.add-user');
    Route::get('/manage-user',[UserController::class, 'manageUser'])->name('admin.user.manage-user');
    Route::post('/new-user',[UserController::class, 'saveNewUser'])->name('admin.product.new-product');
    Route::get('/edit-user/{id}',[UserController::class, 'editUser'])->name('admin.user.edit-user');
    Route::post('/delete-user/{id}',[UserController::class, 'deleteUser'])->name('admin.user.delete-user');
    //updating
    Route::post('/update-user/{id}',[UserController::class, 'updateUser'])->name('admin.user.update-user');


    Route::get('/product',[ProductController::class, 'addProductView'])->name('admin.product.add-product');
    Route::post('/product',[ProductController::class, 'addProduct'])->name('admin.product.add-product');
    //update existing product
    Route::get('/update/{id}',[ProductController::class, 'updateProductView'])->name('admin.product.update-product');
    Route::post('/update/{id}',[ProductController::class, 'updateProduct'])->name('admin.product.update-product');
    //deleting
    Route::post('/delete/{id}',[ProductController::class, 'deleteProduct'])->name('admin.product.delete-product');
    //manage
    Route::get('/manage',[ProductController::class, 'manageProductView'])->name('admin.product.manage-product');

    //product.status
    Route::get('/product-status/{id}',[ProductController::class, 'statusProduct'])->name('product.status');


});
