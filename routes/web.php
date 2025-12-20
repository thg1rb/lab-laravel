<?php

use App\Http\Controllers\ProfessorsController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/students', [StudentsController::class, 'index']);

Route::get('/professors', [ProfessorsController::class, 'index']);
