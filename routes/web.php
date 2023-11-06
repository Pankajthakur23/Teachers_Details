<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
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
Route::get('create',[TeacherController::class,'create']);
Route::post('store',[TeacherController::class,'store'])->name('store');
Route::get('Index',[TeacherController::class,'Index']);
Route::get('edit/{id}',[TeacherController::class,'edit'])->name('edit');
Route::post('update/{teacher}',[TeacherController::class,'update'])->name('update');
Route::get('delete/{teacher}',[TeacherController::class,'delete'])->name('delete');
