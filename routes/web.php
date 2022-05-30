<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
Route::get('/create-industry', [MasterController::class, 'create_industry']);
Route::post('store-industry', [MasterController::class, 'store_industry']);
Route::get('edit-industry/{id}', [MasterController::class, 'edit_industry']);
Route::put('update-industry/{id}', [MasterController::class, 'update_industry']);
/* ======== Location ======== */
Route::get('/create-location', [MasterController::class, 'create_location']);
Route::post('store-location', [MasterController::class, 'store_location']);
Route::get('edit-location/{id}', [MasterController::class, 'edit_location']);
Route::put('update-location/{id}', [MasterController::class, 'update_location']);

/* ======== User ======== */
Route::get('create-user', [UserController::class, 'create']);
Route::post('store-user', [UserController::class, 'store']);
/* ======== Partner ======== */
Route::get('create-partner/{id}', [UserController::class, 'create_partner']);
Route::post('store-partner/{id}', [UserController::class, 'store_partner']);
Route::get('edit-partner/{id}', [UserController::class, 'edit_partner']);
Route::put('update-partner/{id}', [UserController::class, 'update_partner']);
/* ======== Customer ======== */
Route::get('/create-customer/{id}', [UserController::class, 'create_customer']);
Route::post('store-customer/{id}', [UserController::class, 'store_customer']);
Route::get('/show-customer/{id}', [UserController::class, 'show_customer']);
Route::get('/edit-customer/{id}', [UserController::class, 'edit_customer']);
Route::put('update-customer/{id}', [UserController::class, 'update_customer']);

//Ticket Route  
Route::get('/list-ticket', [TicketController::class, 'index']);
Route::get('/create-ticket/{id}', [TicketController::class, 'create']);
Route::post('store-ticket/{id}', [TicketController::class, 'store']);
Route::get('/show-ticket/{id}', [TicketController::class, 'show']);
Route::get('/edit-ticket/{id}', [TicketController::class, 'edit']);
Route::put('update-ticket/{id}', [TicketController::class, 'update']);

