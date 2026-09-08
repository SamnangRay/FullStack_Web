<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StudentController;





Route::prefix('/students')->group(function () {
Route::get('/', [StudentController::class, 'index']);
Route::post('/', [StudentController::class,'store']);
Route::get('/{id}', [StudentController::class,'show']);
Route::put('/{id}',[StudentController::class,'update']);
Route::delete('/{id}', [StudentController::class,'destroy']);
});

Route::prefix('/departments')->group(function () {

// Route::post('/', [DepartmentController::class,'store']);
// Route::get('/', [DepartmentController::class,'create']);

    Route::get('/', [DepartmentController::class, 'index']);
//  Route::get('/', [DepartmentController::class,'create']);
    Route::get('/{id}', [DepartmentController::class,'show']);
    Route::post('/', [DepartmentController::class, 'store']);
    Route::put('/{id}', [DepartmentController::class, 'update']);
    Route::delete('/{id}', [DepartmentController::class, 'destroy']);
});

Route::prefix('/teachers')->group(function () {
Route::get('/', [TeacherController::class, 'index']);
Route::post('/', [TeacherController::class,'store']);
Route::get('/{id}', [TeacherController::class,'show']);
Route::put('/{id}',[TeacherController::class,'update']);
Route::delete('/{id}', [TeacherController::class,'destroy']);
});

Route::prefix('/courses')->group(function () {
Route::get('/', [CourseController::class, 'index']);
Route::post('/', [CourseController::class,'store']);
Route::get('/{id}', [CourseController::class,'show']);
Route::put('/{id}',[CourseController::class,'update']);
Route::delete('/{id}', [CourseController::class,'destroy']);
});



