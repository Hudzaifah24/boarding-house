<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\SuccessController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('login/process', [App\Http\Controllers\Auth\LoginController::class, 'loginProcess'])->name('login-process');
Route::get('verified/{id}', [App\Http\Controllers\Auth\VerificationController::class, 'verified'])->name('verified');
Route::post('resend/verifiend/email/', [App\Http\Controllers\Auth\VerificationController::class, 'verifiedEmail'])->name('verified.email');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('auth-register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('auth-register');
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::get('confirmed/email/{email}', [App\Http\Controllers\Auth\VerificationController::class, 'confirmedEmail'])->name('confirmed-email');

// Forgot Password
Route::get('forgot/password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'forgotPassword'])->name('forgot.password');
Route::post('forgot/password/process', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'forgotPasswordProcess'])->name('forgot.password.process');
Route::get('forgot/password/confirm/email/{id}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'confirmEmail'])->name('forgot.password.confirm.email');
Route::post('resend/forgot/password/confirm/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'resendConfirmEmail'])->name('resend.forgot.password.confirm.email');
Route::post('forgot/password/token/{id}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'createToken'])->name('forgot.password.create.token');
Route::get('reset/password/{email}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'resetPassword'])->name('reset.password');
Route::post('reset/password/process', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'resetPasswordProcess'])->name('reset.password.process');

// Success
Route::get('success/page', [SuccessController::class, 'success'])->name('success.page');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

////////////////////////////////////////////////////
Route::get('landing-page', function(){
    return view('pages.beranda.landing-page');
});
