<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
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


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'hello']);
Route::get('/blog',[BlogController::class,'blog']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout'); 
Route::get('/about',[AboutController::class,'about']);
Route::get('/contact',[ContactController::class,'contact']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add_blog',[AdminController::class,'hello']);
Route::get('/table',[AdminController::class,'table']);
Route::post('/add_blog', [AdminController::class, 'upload']);
Route::get('delete/{id}',[AdminController::class,'delete']);
Route::get('edit/{id}',[AdminController::class,'show']);
Route::post('edit/{id}',[AdminController::class,'update']);
Route::get('travel/{id}',[AdminController::class,'travel'])->name('frontend.travel');



