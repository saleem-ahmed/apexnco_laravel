<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Frontend\indexController;
use app\Http\Controllers\Frontend\contactController;

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
    return view('front-end.app');
});

Route::get('/about', function () {
    return view('front-end.about');
});





// Route::get('/', function () {
//     return view('welcome');
// });