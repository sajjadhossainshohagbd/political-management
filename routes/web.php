<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
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

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

Route::get('/events', [App\Http\Controllers\Frontend\HomeController::class, 'events'])->name('front.events');
Route::get('/event-details/{slug}/{id}', [App\Http\Controllers\Frontend\HomeController::class, 'eventDetails'])->name('event.details');
Route::get('/galleries', [App\Http\Controllers\Frontend\HomeController::class, 'galleries'])->name('front.galleries');



Auth::routes();
