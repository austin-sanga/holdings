<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoansController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LoansController::class,'test']);

Route::view('register','register');

Route::post('/register',[UsersController::class,'register']);

Route::view('login','login');

Route::post('/login',[UsersController::class,'login']);

Route::get('/logout',[UsersController::class,'logout']);

Route::get('/dashboard',[UsersController::class,'dashboard']);

Route::post('/LoanRequest',[LoansController::class,'LoanRequest']);

Route::get('/beg',[LoansController::class,'beg']);

Route::get('/beggers',[LoansController::class,'beggers']);

Route::get('/editrequest/{id}',[LoansController::class,'edit']);

Route::post('/update',[LoansController::class,'update']);

Route::get('/deleterequest/{id}',[LoansController::class,'delete']);

Route::get('/bid/{id}',[LoansController::class,'bid']);