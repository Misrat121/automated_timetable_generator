<?php


use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




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


Route::get('/',[HomeController::class,'home']);
Route::get('/contact',[HomeController::class,'contact']);


Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

Route::get('/course',[CourseController::class,'list'])->name('course.list');



  
//uri,controller,method

//model
//view
//route
//controller
//method 