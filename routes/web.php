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


Route::get('/place', 'App\Http\Controllers\place_controller@index');

Route::get('/', function () {
    return view('welcome');
});
