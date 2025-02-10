<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AbstractController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/contact', ContactController::class)->name('contact');
Route::get('/abstract', AbstractController::class)->name('abstract');
Route::get('/registration', RegistrationController::class)->name('registration');
Route::get('/committee', CommitteeController::class)->name('committee');
