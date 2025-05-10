<?php

use App\Http\Controllers\HomeApi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/home-api', [HomeApi::class, 'index']);
