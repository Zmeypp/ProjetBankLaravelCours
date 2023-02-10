<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankaccountController;

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

//Routes fonctionnelles

Route::get('/register', [AuthController::class, 'register'])->name("register"); //Aller page register

Route::post('/register/add', [AuthController::class, 'create'])->name("register.create"); //Créer un utilisateur

Route::get('/login', [AuthController::class, 'login'])->name("login"); //Aller page login

Route::post('/logMe', [AuthController::class, 'logMe'])->name("login.logMe"); //Se connecter

Route::get('/home', [AuthController::class, 'home'])->name('home'); //Aller page home

Route::get('/createaccount', [BankaccountController::class, 'createaccount'])->name('createaccount'); //Aller page Create Account


//Routes en test

Route::post('/createaccount/add', [BankaccountController::class, 'create'])->name('createaccount.create'); //Créer un compte bancaire