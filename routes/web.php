<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/userDashboard', [UserController::class, 'index'])
    ->middleware(['auth', 'member'])
    ->name('userDashboard');

Route::get('/adminDashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('adminDashboard');

Route::get('/staffDashboard', [StaffController::class, 'index'])
    ->middleware(['auth', 'staff'])
    ->name('staffDashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
