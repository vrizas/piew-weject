<?php

use Illuminate\Support\Facades\Route;

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
//     return view('home');
// });


use App\Http\Controllers\Management;

Route::get('/', [App\Http\Controllers\Management\RestaurantController::class, 'index']);
Route::get('/login', function () {
  return view('login');
});
Route::get('/About', function () {
  return view('About');
});
