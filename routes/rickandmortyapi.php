<?php

use App\Http\Controllers\RickAndMortyApiController;
use Illuminate\Support\Facades\Route;

Route::get('/rick-and-morty', [RickAndMortyApiController::class, 'home'])->name('rick-morty');
