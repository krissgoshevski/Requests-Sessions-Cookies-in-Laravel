<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;

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


Route::get('/', function () {
    return view('welcome');
});


// GET
Route::get('/form/create', function () {
    return view('first.form');
});

Route::get('/login',[LoginController::class, 'loginForm'])->name('form-login');
Route::get('/home', [LoginController::class, 'home'])->name('home');
Route::get('/comment', [LoginController::class, 'comment'])->name('comment');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');




// POST
Route::post('/form-submit',[FormController::class, 'submit'])->name('form-submit');
Route::post('/login-store-validation',[LoginController::class, 'loginSubmit'])->name('login-submit'); // for 1 FORM 



Route::post('/login/request',[LoginController::class, 'loginReq'])->name('login'); // for 2 FORM 
Route::post('/storeComment', [LoginController::class, 'storeComment'])->name('storeComment');












