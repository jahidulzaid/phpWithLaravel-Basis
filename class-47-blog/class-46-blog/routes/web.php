<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
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
 Route::get('/',[BlogController::class, 'index'])->name('/');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/add.category',[CategoryController::class,'addCategory'])->name('add-category');
    Route::get('/manage.category',[CategoryController::class,'manageCategory'])->name('manage-category');

    Route::post('/new.category',[CategoryController::class,'saveCategory'])->name('new-category');

    //manage-category-routes
    Route::get('/edit.category/{id}',[CategoryController::class,'editCategory'])->name('category.edit');
    //update-edit Category page
//    Route::post('/edit.category/{id}',[CategoryController::class,'updateCategory'])->name('category.edit');

    Route::get('/status.category/{id}',[CategoryController::class,'statusCategory'])->name('category.status');
    Route::post('/delete.category',[CategoryController::class,'deleteCategory'])->name('category.delete');
});


