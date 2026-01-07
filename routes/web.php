<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ProfessorsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/{id}', [StudentsController::class, 'show']);

Route::get('/professors', [ProfessorsController::class, 'index']);
Route::get('/professors/{id}', [ProfessorsController::class, 'show']);

Route::resource('artists', ArtistController::class);

require __DIR__.'/auth.php';
