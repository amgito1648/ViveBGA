<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Auth::routes();

// Si alguien entra a /home, lo redirigimos al inicio:
Route::get('/home', function () {
    return redirect()->route('welcome');
});