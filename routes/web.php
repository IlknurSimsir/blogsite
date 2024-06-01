<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/all_texts', [AdminController::class, 'table']);
Route::get('/dene', [AdminController::class, 'dene']);
Route::post('/delete/{id}', [AdminController::class, 'delete'])->name("textdelete");
