<?php

use Illuminate\Support\Facades\Route;
use App\Models\tblplaces;

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


Route::get('/index', 'App\Http\Controllers\place_controller@index');

Route::get('/signin','App\Http\Controllers\place_controller@signin'); 

Route::get('/register','App\Http\Controllers\place_controller@register'); 

Route::post('/register','App\Http\Controllers\place_controller@store')->name('test.store'); 