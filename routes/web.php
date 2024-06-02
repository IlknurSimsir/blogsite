<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/all_texts', [AdminController::class, 'table']);
Route::get('/dene', [AdminController::class, 'dene']);
Route::get('/createtext', [AdminController::class, 'createtext']);
Route::post('/createtext', [AdminController::class, 'createtextpost'])->name('createtextpost');;
Route::post('/delete/{id}', [AdminController::class, 'delete'])->name("textdelete");
