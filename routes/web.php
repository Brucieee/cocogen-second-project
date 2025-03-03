<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StepperController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;


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


Route::get('/create-account', [PageController::class, 'CreateAccount'])->name('CreateAccount');

Route::get('/create-account-as', function () {
    return view('create-account-as');
})->name('create-account-as');

Route::get('/create-account-as-partner', function () {
    return view('create-account-as-partner');
})->name('create.partner');

Route::get('/create-account-as-ph-1', function () {
    return view('Register.create-account-as-ph-1');
})->name('create.ph-1');



Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register/process', [RegisterController::class, 'process'])->name('register.process');


require __DIR__ . '/auth.php';
