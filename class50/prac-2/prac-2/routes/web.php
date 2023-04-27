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
