<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
=======
use App\Http\Controllers\HomeApi;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
>>>>>>> origin/main

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
=======
Route::get('/crud/', [UserController::class, 'index'])->name('crud-home');
Route::get('/crud/create', [UserController::class, 'create'])->name('users.create');
Route::post('/crud', [UserController::class, 'store'])->name('users.store');
Route::get('/crud/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/crud/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/crud/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/crud/', [UserController::class, 'destroy'])->name('users.destroy');
>>>>>>> origin/main
