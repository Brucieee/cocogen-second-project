<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;

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
Route::get('create-account', function () {
    return view('create-account');
});
Route::get('fields-testing', function () {
    return view('fields-testing');
});
// Register routes
Route::prefix('register')->group(function () {
    Route::get('create-account-as', function () {
        return view('Register.create-account-as');
    });

    Route::get('create-account-as-partner', function () {
        return view('Register.create-account-as-partner');
    });

    Route::get('create-account-as-ph-1', function () {
        return view('Register.create-account-as-ph-1');
    });

    Route::get('create-account-as-ph-2', function () {
        return view('Register.create-account-as-ph-2');
    });

    Route::get('create-account-as-ph-2-2', function () {
        return view('Register.create-account-as-ph-2-2');
    });

    Route::get('create-account-as-ph-identity-1', function () {
        return view('Register.create-account-as-ph-identity-1');
    });
});

Route::get('/create-account-as-ph-identity-1', function () {
    return view('create-account-as-ph-identity-1');
})->name('create-account-as-ph-identity-1');

// routes/web.php

use App\Http\Controllers\UserController;

Route::post('/submit-test', [TestController::class, 'store']);
Route::post('/submit-extra-data/{id}', [TestController::class, 'update']);

require __DIR__ . '/auth.php';