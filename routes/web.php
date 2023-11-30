<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\batchController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Layout');
});

Route::resource('/students',StudentController::class);
Route::resource('/teachers',teacherController::class);
Route::resource('/courses',CourseController::class);
Route::resource('/batches',BatchController::class);
