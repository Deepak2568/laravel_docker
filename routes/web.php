<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/',[EmployeeController::class,'index'])->name('index');
Route::get('/create',[EmployeeController::class,'create'])->name('create');
Route::post('/store',[EmployeeController::class,'store'])->name('store');

// Route::get('/', function () {
//     return view('welcome');
// });
