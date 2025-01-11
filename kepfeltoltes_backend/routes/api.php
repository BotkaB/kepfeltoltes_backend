<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kepek;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('file-upload', [Kepek::class, 'index'])->name('file.upload');
Route::post('file-upload', [Kepek::class, 'store'])->name('file.upload.store');
