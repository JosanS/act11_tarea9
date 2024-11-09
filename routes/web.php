<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'index'])->name('home');
Route::get('/fotos', [MenuController::class, 'fotos'])->name('fotos');
Route::get('/contacto', [MenuController::class, 'contacto'])->name('contacto');
Route::get('/about', [MenuController::class, 'about'])->name('about');
Route::get('/servicios', [MenuController::class, 'servicios'])->name('servicios');
