<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/top', [App\Http\Controllers\TopController::class, 'index']); // ←追加
Route::get('/sample', [App\Http\Controllers\SampleController::class, 'index']); // ←追加