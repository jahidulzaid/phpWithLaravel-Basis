<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;


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
Route::get('/',[BlogController::class,'index'])->name('/');
Route::get('/blog-details/{slug}',[BlogController::class,'blogDetails'])->name('blog.details');
Route::get('/customer-register',[CustomerController::class,'index'])->name('customer.register');
Route::post('/customer-register',[CustomerController::class,'saveCustomer'])->name('customer.register');

Route::post('/new-user',[CustomerController::class,'saveUser'])->name('new.user');
Route::get('/customer-logout',[CustomerController::class,'customerLogout'])->name('customer.logout');
Route::get('/customer-login',[CustomerController::class,'customerLogin'])->name('customer.login');
Route::post('/customer-login',[CustomerController::class,'customerLogInCheck'])->name('customer.login');
Route::post('/new-comment',[CommentController::class,'saveComment'])->name('new.comment');

//
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add.category');
    Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage.category');
    Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new.category');

    Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('category.edit');
    Route::get('/status-category/{id}',[CategoryController::class,'statusCategory'])->name('category.status');
    Route::post('/delete-category',[CategoryController::class,'deleteCategory'])->name('category.delete');
    Route::post('/update-category',[CategoryController::class,'updateCategory'])->name('category.update');

    Route::get('/add-author',[AuthorController::class,'addAuthor'])->name('add.author');
    Route::get('/manage-author',[AuthorController::class,'manageAuthor'])->name('manage.author');
    Route::post('/new-author',[AuthorController::class,'saveAuthor'])->name('new.author');
    Route::get('/edit-author/{id}',[AuthorController::class,'editAuthor'])->name('author.edit');
    Route::get('/status-author/{id}',[AuthorController::class,'statusAuthor'])->name('author.status');
    Route::post('/delete-author',[AuthorController::class,'deleteAuthor'])->name('author.delete');

    Route::get('/add-blog',[BlogController::class,'addBlog'])->name('add.blog');
    Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('manage.blog');
    Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('new.blog');
    Route::get('/blog-edit/{id}',[BlogController::class,'editBlog'])->name('blog.edit');
    Route::post('/blog-delete',[BlogController::class,'deleteBlog'])->name('blog.delete');
});
