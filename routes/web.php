<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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
    return view('layouts.efun');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// workbench panel contact us tab
Route::middleware(['auth:sanctum', 'verified'])->get('/contact-us-list', function () {
    return view('workbench-contact-us-view');
})->name('contact-us-list');

// workbench panel user login history tab
Route::middleware(['auth:sanctum', 'verified'])->get('/user-login-history', function () {
    return view('workbench-user-login-history');
})->name('user-login-history');

Route::get('/workbench', function () {
    return view('welcome');
});

// Contact Us Send Mail
Route::get('/mailto-customer/{customerEmail}', [ContactUsController::class, 'sendEmail']);
