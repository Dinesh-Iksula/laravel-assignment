<?php

use App\Http\Controllers\PropertyDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Property listing routes
Route::get('/property-details', [PropertyDetailController::class, 'index']);
Route::get('/property-details/form-validations', [PropertyDetailController::class, 'formValidations']);