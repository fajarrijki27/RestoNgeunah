<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [DataController::class, 'index']);