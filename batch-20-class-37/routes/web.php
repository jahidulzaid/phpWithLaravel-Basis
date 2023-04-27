<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/add.student', [StudentController::class,'index'])->name('add.student');
Route::get('/student-list', [StudentController::class,'studentList'])->name('student.list');
Route::get('/edit-student/{id}', [StudentController::class,'studentEdit'])->name('edit.student');
Route::post('/delete-student', [StudentController::class,'studentDelete'])->name('delete.student');
Route::post('/update-student', [StudentController::class,'studentUpdate'])->name('update.student');

Route::get('/add-department', [DepartmentController::class,'index'])->name('add.department');
Route::get('/manage-department', [DepartmentController::class,'index'])->name('manage.department');
Route::post('/new-department', [DepartmentController::class,'saveDepartment'])->name('new.department');



