<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Auth;
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

// Guest Route
Route::get('/', [GuestController::class, 'index']);

// Auth Home Route
Auth::routes();
Route::get('/home', [HomeController::class, 'index']);

//Customer Info Registration Route
Route::get('/create-customer/{id}', [CustomerController::class, 'create']);
Route::post('store-customer/{id}', [CustomerController::class, 'store']);
Route::get('/show-customer/{id}', [CustomerController::class, 'show']);
Route::get('/edit-customer/{id}', [CustomerController::class, 'edit']);
Route::put('update-customer/{id}', [CustomerController::class, 'update']);

//Ticket Route
Route::get('/ticket-list', [TicketController::class, 'index']);

