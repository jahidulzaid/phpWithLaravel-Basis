<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;

Route::get('/', [BlogController::class, 'index'])->name('/');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('add-category', [CategoryController::class, 'addCategory'])->name('add-category');
    Route::get('manage-category', [CategoryController::class, 'manageCategory'])->name('manage-category');
    Route::post('/new-category', [CategoryController::class, 'saveCategory'])->name('new-category');
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('edit-category');
    Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('update-category');
    Route::post('/delete-category', [CategoryController::class, 'deleteCategory'])->name('delete-category');
    Route::get('/status-category/{id}', [CategoryController::class, 'statusCategory'])->name('status-category');

    Route::get('/add-author', [AuthorController::class, 'addAuthor'])->name('add-author');
    Route::get('/manage-author', [AuthorController::class, 'manageAuthor'])->name('manage-author');
    Route::get('/edit-author/{id}', [AuthorController::class, 'editAuthor'])->name('edit-author');
    Route::post('/new-author', [AuthorController::class, 'saveAuthor'])->name('new-author');
    Route::post('/update-author', [AuthorController::class, 'updateAuthor'])->name('update-author');
    Route::post('/delete-author', [AuthorController::class, 'deleteAuthor'])->name('delete-author');
    Route::get('/status-author/{id}', [AuthorController::class, 'statusAuthor'])->name('status-author');

    Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add-blog');
    Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manage-blog');
    Route::post('/new-blog', [BlogController::class, 'saveBlog'])->name('new-blog');
    Route::post('/update-blog', [BlogController::class, 'updateBlog'])->name('update-blog');
    Route::post('/delete-blog', [BlogController::class, 'deleteBlog'])->name('delete-blog');


});
