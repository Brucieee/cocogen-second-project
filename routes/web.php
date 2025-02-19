<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StepperController;
use App\Http\Controllers\PageController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/step1', [StepperController::class, 'step1'])->name('step1');
Route::get('/step2', [StepperController::class, 'step2'])->name('step2');
Route::get('/step3', [StepperController::class, 'step3'])->name('step3');

Route::get('/create-account', [PageController::class, 'CreateAccount'])->name('CreateAccount');


require __DIR__.'/auth.php';
