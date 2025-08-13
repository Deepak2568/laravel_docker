<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/',[EmployeeController::class,'index'])->name('index');
Route::get('/create',[EmployeeController::class,'create'])->name('create');
Route::post('/store',[EmployeeController::class,'store'])->name('store');
Route::get('/edit/{id}',[EmployeeController::class,'edit'])->name('edit');
Route::put('/update/{id}',[EmployeeController::class,'update'])->name('update');
Route::delete('/delete/{id}',[EmployeeController::class,'delete'])->name('delete');

// Route::get('/', function () {
//     return view('welcome');
// });
