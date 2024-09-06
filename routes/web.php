<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', [RegistrationController::class, 'showRegistrationForm'])->name('register.form');


Route::post('/register/add', [RegistrationController::class, 'register'])->name('register.submit');


