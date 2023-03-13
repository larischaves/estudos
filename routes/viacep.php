<?php

use App\Http\Controllers\ViaCepController;
use Illuminate\Support\Facades\Route;

Route::get('/viacep',[ViaCepController::class, 'home'])->name('viacep');
