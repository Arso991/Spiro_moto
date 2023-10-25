<?php

use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::controller(HomeContoller::class)->group(function(){
    Route::get("/","home")->name("home");
});
Route::controller(MotorController::class)->group(function(){
    Route::get("motors", "motorlist")->name("motorList");
});
Route::controller(LoanController::class)->group(function(){
    Route::get("loan", "loanslist")->name("loanList");
});
Route::controller(UsersController::class)->group(function(){
    Route::get("sign-up", "signup")->name("signUp");
    Route::get("sign-in", "signin")->name("signIn");
    Route::post("registration", "registerstore")->name("registerStore");
    Route::get("verifysubscription/{email}", "verify")->name("verifyEmail");
    Route::post("authenfication", "authenticate")->name("authentificate");
    Route::get("sign-out", "logout")->name("signOut");
});