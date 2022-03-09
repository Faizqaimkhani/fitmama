<?php

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
Route::get('/' , function(){
 
 return view('auth.login');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard' , [\App\Http\Controllers\Admin\AdminController::class,'index']);

// Packages
Route::get('/packages' , [\App\Http\Controllers\PackageController::class,'index']);

// Profile Questions

Route::get('/profile_questions' , [\App\Http\Controllers\ProfileQuestionController::class,'index']);
Route::get('/profile_questions/create' , [\App\Http\Controllers\ProfileQuestionController::class,'create']);
Route::post('/profile_questions/store' , [\App\Http\Controllers\ProfileQuestionController::class,'store']);
Route::get('/profile_questions/{id}/edit' , [\App\Http\Controllers\ProfileQuestionController::class,'edit']);
Route::put('/profile_questions/{id}/update' , [\App\Http\Controllers\ProfileQuestionController::class,'update']);
Route::get('/profile_questions/{id}/delete' , [\App\Http\Controllers\ProfileQuestionController::class,'destroy']);

// User Profile

Route::get('/users_list' , [\App\Http\Controllers\Admin\UserController::class,'users_list']); 
Route::get('/user_profile/{id}' , [\App\Http\Controllers\Admin\UserController::class,'user_profile']);
