<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\HomeController;

//Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('/')->name('auth.')->group(function(){
    Route::get('/', [authcontroller::class, 'index'])->name('login');
    Route::post('/', [authcontroller::class, 'login']);
    Route::get('/registration', [authcontroller::class, 'registration'])->name('registration');
    Route::post('/registration', [authcontroller::class, 'create']);
});

Route::prefix('/home')->name('home.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
