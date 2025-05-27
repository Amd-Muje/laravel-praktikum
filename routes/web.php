<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthCOntroller::class, "register"])->name('auth.register');
Route::post('/register', [AuthCOntroller::class, "store"])->name('auth.store');
Route::get('/login', [AuthCOntroller::class, "login"])->name('auth.login');
Route::post('/login', [AuthCOntroller::class, "authenticate"])->name('auth.authenticate');
Route::delete('/logout', [AuthCOntroller::class, "logout"])->name('auth.logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/students', [StudentController::class,'index'])->name('students.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/students/create', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

    Route::post('/majors', [MajorController::class, 'store'])->name('majors.store');
    Route::get('/majors', [MajorController::class,'index'])->name('majors.index');
    Route::get('/majors/create', [MajorController::class, 'create'])->name('majors.create');
    Route::put('/majors/{id}', [MajorController::class, 'update'])->name('majors.update');
    Route::get('/majors/{id}', [MajorController::class, 'show'])->name('majors.show');
    Route::get('/majors/{id}/edit', [MajorController::class, 'edit'])->name('majors.edit');
    Route::delete('/majors/{id}', [MajorController::class, 'destroy'])->name('majors.destroy');
});


Route::redirect('/redirect', '/students');


