<?php

use App\Enums\PositionEnum;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AbstractController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SubmissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/committee', CommitteeController::class)->name('committee');
Route::get('/abstract', AbstractController::class)->name('abstract');
Route::get('/register', RegisterController::class)->name('register');
Route::get('/contact', ContactController::class)->name('contact');

Route::get('/submissions/{reference}', [SubmissionController::class, 'show'])->name('submissions.show');
Route::resource('/submissions', SubmissionController::class)->only(['store', 'edit', 'update']);
Route::get('/registrations/{reference}', [RegistrationController::class, 'show'])->name('registrations.show');
Route::resource('/registrations', RegistrationController::class)->only(['store', 'edit', 'update']);

Route::get('/playground', function () {
    $data = array_column(PositionEnum::cases(), 'value');
    dd($data);
});
