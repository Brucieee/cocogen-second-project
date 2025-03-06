<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PolicyholderController;


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
Route::get('create-account', function () { return view('create-account'); });
Route::get('fields-testing', function () { return view('fields-testing'); });
Route::get('testing-page', function () { return view('testing-page'); });


Route::post('/submit-test', [TestController::class, 'store']);
Route::post('/submit-extra-data/{id}', [TestController::class, 'update']);

Route::post('/submit-step1', [PolicyholderController::class, 'store']);
Route::post('/submit-step2/{id}', [PolicyholderController::class, 'update']);


require __DIR__ . '/auth.php';
