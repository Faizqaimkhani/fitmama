<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login',[\App\Http\Controllers\API\AuthController::class,'login']);

Route::post('register',[\App\Http\Controllers\API\AuthController::class,'register']);

Route::middleware(['auth:sanctum'])->group(function(){
    
    // Logout 
    Route::post('logout',[\App\Http\Controllers\API\AuthController::class,'logout']);
    
       //  Packages
    Route::get('packages' , [\App\Http\Controllers\API\PackageController::class,'index']);
    
    // Subscribe Packages
    Route::post('user_packages/{package_id}/store',[\App\Http\Controllers\API\UserPackagesController::class,'store']);
    
    // Profile Question 
    Route::get('/profile_questions/{package_id}' , [\App\Http\Controllers\API\ProfileQuestionController::class,'index']);

    // Profile Answer 
    Route::post('/profile_answer/{question_id}' , [\App\Http\Controllers\API\ProfileAnswerController::class,'store']);

     // User Measurement Body

 Route::post('/user_body_measurement/store' , [\App\Http\Controllers\API\UserBodyMeasurementController::class,'store']);

    
});

