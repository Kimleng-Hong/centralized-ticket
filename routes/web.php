<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PartnerController;
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

//Master Route
Route::get('/index-master', [MasterController::class, 'index']);
Route::get('/setup-master', [MasterController::class, 'setup']);
/* ======== Industry ======== */
Route::get('/add-industry', [MasterController::class, 'add_industry']);
Route::post('store-industry', [MasterController::class, 'store_industry']);
Route::get('edit-industry/{id}', [MasterController::class, 'edit_industry']);
Route::put('update-industry/{id}', [MasterController::class, 'update_industry']);
/* ======== Location ======== */
Route::get('/add-location', [MasterController::class, 'add_location']);
Route::post('store-location', [MasterController::class, 'store_location']);
Route::get('edit-location/{id}', [MasterController::class, 'edit_location']);
Route::put('update-location/{id}', [MasterController::class, 'update_location']);
/* ======== Partner ======== */
Route::get('/create-partner', [PartnerController::class, 'create']);
Route::post('store-partner', [PartnerController::class, 'store']);
Route::get('edit-partner/{id}', [PartnerController::class, 'edit']);
Route::put('update-partner/{id}', [PartnerController::class, 'store']);

//Customer Route
Route::get('/create-customer', [CustomerController::class, 'create']);
Route::post('store-customer', [CustomerController::class, 'store']);
Route::get('/show-customer/{id}', [CustomerController::class, 'show']);
Route::get('/edit-customer/{id}', [CustomerController::class, 'edit']);
Route::put('update-customer/{id}', [CustomerController::class, 'update']);

//Ticket Route
Route::get('/list-ticket', [TicketController::class, 'index']);
Route::get('/create-ticket/{id}', [TicketController::class, 'create']);
Route::post('store-ticket/{id}', [TicketController::class, 'store']);
Route::get('/show-ticket/{id}', [TicketController::class, 'show']);
Route::get('/edit-ticket/{id}', [TicketController::class, 'edit']);
Route::put('update-ticket/{id}', [TicketController::class, 'update']);

