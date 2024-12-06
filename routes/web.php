<?php

use App\Http\Controllers\StudentController;
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
    return view('welcome');
});


Route::get("students/index",[StudentController::class,'index'])->name('student.index');
Route::get("students/create",[StudentController::class,'create'])->name('student.create');
Route::post("students/store",[StudentController::class,'store'])->name('student.store');
Route::get("students/edit/{id}",[StudentController::class,'edit'])->name('student.edit');
Route::put("students/udpate/{id}",[StudentController::class,'update'])->name('student.update');
Route::get("students/delete/{id}",[StudentController::class,'delete'])->name('student.delete');
Route::get("students/search",[StudentController::class,'search'])->name('student.search');
