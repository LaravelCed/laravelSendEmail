<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

// For Routing Pages
Route::get('/', function () {
    return view('index');
});
// For Routing Pages End

Route::post('/sendEmailAction', [indexController::class, 'sendEmailAction']);