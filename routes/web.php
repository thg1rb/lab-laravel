<?php

use App\Http\Controllers\ArtistController;
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
Route::get('/students/{id}', [StudentsController::class, 'show']);

Route::get('/professors', [ProfessorsController::class, 'index']);
Route::get('/professors/{id}', [ProfessorsController::class, 'show']);

Route::resource('artists', ArtistController::class);
