<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\WeedingFormController;

Route::get('/', function () {
    return view('form');
});

Route::get('/logowanie', [LoginController::class, 'showLoginForm'])->name('login-form');
Route::post('/zaloguj', [LoginController::class, 'login'])->name('login');
Route::get('/wyloguj', [LoginController::class, 'logout'])->name('logout');
Route::get('/dziekuje', [WeedingFormController::class, 'showThanks'])->name('thanks');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/panel-admina', [LoginController::class, 'showPanel'])->name('panel');
    Route::get('/zmiana-hasla', [ChangePasswordController::class, 'showChangePasswordForm'])->name('change-password-form');
    Route::post('/zmiana-hasla', [ChangePasswordController::class, 'changePassword'])->name('change-password');
    Route::get('/formularz-pdf/{id}', [WeedingFormController::class, 'generatePdf'])->name('forms.generate.pdf');
    Route::get('/formularz/{id}', [WeedingFormController::class, 'edit'])->name('forms.edit');
});
