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

Route::get('/about', function () {
    return view('About');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/business/{id}', [App\Http\Controllers\Management\RestaurantController::class, 'indexBisnis'])
    ->middleware(['auth'])->name('business');
Route::get('/business/{id}/update', [App\Http\Controllers\Management\RestaurantController::class, 'edit'])
    ->middleware(['auth'])->name('businessUpdate');
Route::get('/business/{id}/create', [App\Http\Controllers\Management\RestaurantController::class, 'create'])
    ->middleware(['auth'])->name('businessCreate');
Route::post('/business/{id}', [App\Http\Controllers\Management\RestaurantController::class, 'update'])
    ->middleware(['auth'])->name('businessEdit');

Route::get('/', [App\Http\Controllers\Management\RestaurantController::class, 'index']);

Route::get('/search', [App\Http\Controllers\SearchController::class, 'search']);

Route::get('/profile/{id}', [App\Http\Controllers\Management\RatingController::class, 'indexProfile']);
Route::post('/profile/{id}', [App\Http\Controllers\Management\RatingController::class, 'store'])
    ->middleware(['auth'])->name('business');

require __DIR__ . '/auth.php';


