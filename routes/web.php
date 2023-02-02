<?php

use App\Http\Controllers\{

    UserController

};
use Illuminate\Support\Facades\Route;
Route::put('/users/{id}',[UserController::class, 'update'])->name('user.update');
Route::get('/users/{id}/edit',[UserController::class, 'edit'])->name('user.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name("users.create");
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/', function () {
    return view('welcome');
});
