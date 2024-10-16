<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Route::view('/', 'frontend.index');
//Route::view('/', 'frontend.home2');

Route::match(['GET', 'POST'], '/', [HomeController::class, 'index'])->name('index');
Route::match(['GET', 'POST'], '/home02', [HomeController::class, 'home02'])->name('home02');
Route::match(['GET', 'POST'], '/home03', [HomeController::class, 'home03'])->name('home03');
Route::match(['GET', 'POST'], '/home04', [HomeController::class, 'home04'])->name('home04');
Route::match(['GET', 'POST'], '/home05', [HomeController::class, 'home05'])->name('home05');
