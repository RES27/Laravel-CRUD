<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginpost'])->name('login_post');
Route::get('/registrasi', [UserController::class, 'register'])->name('registrasi');
Route::post('/registrasi', [UserController::class, 'regiteruser'])->name('registrasi_post');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware(['auth', 'role:user']);   
