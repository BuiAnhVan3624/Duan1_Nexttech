<?php

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
Route::get('register',[AuthenticationController::class,'register'])->name('register');
Route::post('register',[AuthenticationController::class,'postRegister'])->name('postRegister');
Route::get('login',[AuthenticationController::class,'login'])->name('login');
Route::post('login',[AutenticationController::class,'postLogin'])->name('postLogin');
Route::get('logout',[AuthenticationController::class,'logout'])->name('logout');
