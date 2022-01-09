<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;


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


//Route::get('index', [HomeController::class, 'index']);

Route::get('login', [UserController::class, 'index'])->name('login'); 
Route::post('login', [UserController::class, 'login']); 

Route::get('register',[UserController::class, 'register']); 
Route::post('register',[UserController::class, 'store'])->name('test.store'); 

Route::get('index', [HomeController::class, 'index']);


Route::get('/signout','App\Http\Controllers\UserController@logout'); 

Route::get('profile', [UserController::class, 'profile']);

Route::group(['middleware' => 'auth'], function(){


});
