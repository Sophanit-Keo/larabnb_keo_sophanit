<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');

Route::get('/property/{id}', [App\Http\Controllers\PropertyController::class, 'show'])->name('property.show');