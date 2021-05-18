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

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/business', function () {
    return view('bisnis.bisnis');
})->middleware(['auth'])->name('business');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/', [App\Http\Controllers\Management\RestaurantController::class, 'index']);

Route::get('/business/update-business', function () {
    return view('bisnis.update-business');
});

Route::put('/business/update-business', [App\Http\Controllers\Management\RestaurantController::class,'update']);
Route::post('/business', [App\Http\Controllers\Management\RestaurantController::class,'store']);
Route::get('/business/update-business', [App\Http\Controllers\Management\RestaurantController::class,'edit']);
// Route::resource('/home',App\Http\Controllers\Auth\AuthenticatedSessionController::class);


require __DIR__.'/auth.php';

