<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', [BiodataController::class, 'index']);
Route::get('/biodataForm', [BiodataController::class, 'showForm']);
Route::post('/biodata', [BiodataController::class, 'processForm']);

