<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/form', [formController::class, 'getForm'])->name('form');
Route::post('/post-request', [formController::class, 'cafe'])->name('masuk');
Route::get('/cafe', [CafeController::class, 'index'])->name('cafe');
Route::get('/list', [ListController::class, 'show'])->name('list');
Route::get('/list/{id}/edit', [ListController::class, 'edit'])->name('list.edit');
Route::post('/list/{id}/update', [ListController::class, 'update'])->name('list.update');
Route::delete('/list/{id}/delete', [ListController::class, 'delete'])->name('list.delete');
Route::get('/profil',[UserController::class,'show']);
Route::get('/lst/1',[UserController::class,'idnama']);

