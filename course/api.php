<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CollegeController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);
Route::post('addCourse',[CourseController::class,'addCourse']);
Route::get('list',[CourseController::class,'list']);
Route::delete('delete/{id}',[CourseController::class,'delete']);
Route::get('Course/{id}',[CourseController::class,'getCourse']);
Route::put('updateCourse/{id}',[CourseController::class,'updateCourse']);

