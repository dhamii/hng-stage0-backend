<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatApiContoller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/me', [CatApiContoller::class, 'index']);
