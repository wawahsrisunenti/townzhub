<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//Route::view('/', 'frontend.index');
//Route::view('/', 'frontend.home2');

Route::match(['GET', 'POST'], '/', [HomeController::class, 'index'])->name('index');
Route::match(['GET', 'POST'], '/propertyGrid', [HomeController::class, 'propertyGrid'])->name('propertyGrid');
Route::match(['GET', 'POST'], '/property', [HomeController::class, 'property'])->name('property');
Route::match(['GET', 'POST'], '/propertyMap', [HomeController::class, 'propertyMap'])->name('propertyMap');
Route::match(['get', 'post'], '/about', [HomeController::class, 'about'])->name('about');
Route::match(['GET', 'POST'], '/faq', [HomeController::class, 'faq'])->name('faq');
Route::match(['GET', 'POST'], '/agents', [HomeController::class, 'agents'])->name('agents');
Route::match(['GET', 'POST'], '/agentsDetail', [HomeController::class, 'agentsDetail'])->name('agentsDetail');
Route::match(['GET', 'POST'], '/agencies', [HomeController::class, 'agencies'])->name('agencies');
Route::match(['GET', 'POST'], '/agenciesDetail', [HomeController::class, 'agenciesDetail'])->name('agenciesDetail');
Route::match(['GET', 'POST'], '/blog', [HomeController::class, 'blog'])->name('blog');
Route::match(['GET', 'POST'], '/blogDetail', [HomeController::class, 'blogDetail'])->name('blogDetail');
Route::match(['GET', 'POST'], '/contact', [HomeController::class, 'contact'])->name('contact');
