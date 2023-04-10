<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(frontendController::class)->group(function () {
    Route::get('/', 'homepage');
    Route::get('/signup', 'signup');
    Route::post('/store', 'signin_store');
    Route::get('/signin', 'signin')->name('signin');;
    Route::post('/logindetails', 'loginCheck');
    Route::get('/lost-password', 'lostPassword');
    Route::get('/logout', 'logoutlogin');
});


//admin Route
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/adminDashboard',[adminController::class, 'dashboard']);
});

//user Route
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/userDashboard',[userController::class, 'dashboard']);
});