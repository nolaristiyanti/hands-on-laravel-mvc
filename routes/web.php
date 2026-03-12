<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/about', [ProfileController::class, 'about'])->name('profile.about');
Route::get('/profile/portofolio', [ProfileController::class, 'portofolio'])->name('profile.portofolio');
Route::get('/profile/contact', [ProfileController::class, 'contact'])->name('profile.contact');

Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/{nama}', [StudentController::class, 'show']);
