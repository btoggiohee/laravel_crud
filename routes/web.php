<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::prefix('student')->group(function(){
    Route::get('list',[StudentController::class,'getIndex'])->name('student.getIndex');
    Route::get('new',[StudentController::class,'new_index'])->name('student.new_index');
    Route::patch('new',[Student::class,'new_confirm']);
    Route::post('new',[StudentController::class,'new_finish'])->name('student.new_finish');


    Route::get('edit/{id}/',[StudentController::class,'edit_index'])->name('student.edit_index');
    Route::post('edit/{id}/',[StudentController::class,'edit_finish'])->name('student.edit_finish');

});
