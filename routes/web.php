<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerControlller;
use App\Http\Controllers\EmployeeControlller;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\LocationController;
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
Route::get('/about', [GuestController::class, 'about']);
Route::get('/contact', [GuestController::class, 'contact']);

// Auth Home Route
Auth::routes();
Route::get('/home', [HomeController::class, 'index']);

//Master Route
Route::get('/index-master', [MasterController::class, 'index']);
Route::get('/create-master', [MasterController::class, 'create']);
Route::post('store-master', [MasterController::class, 'store']);
Route::get('/setup-master', [MasterController::class, 'setup']);
/* ======== Industry ======== */
Route::get('/create-industry', [IndustryController::class, 'create']);
Route::post('store-industry', [IndustryController::class, 'store']);
Route::get('edit-industry/{id}', [IndustryController::class, 'edit']);
Route::put('update-industry/{id}', [IndustryController::class, 'update']);
/* ======== Location ======== */
Route::get('/create-location', [LocationController::class, 'create']);
Route::post('store-location', [LocationController::class, 'store']);
Route::get('edit-location/{id}', [LocationController::class, 'edit']);
Route::put('update-location/{id}', [LocationController::class, 'update']);

//User Route
Route::get('create-user', [UserController::class, 'create']);
Route::post('store-user', [UserController::class, 'store']);
Route::get('/show-user/{id}', [UserController::class, 'show']);
Route::get('/edit-user/{id}', [UserController::class, 'edit']);
Route::put('update-user/{id}', [UserController::class, 'update']);

//Partner Route
Route::get('/create-partner/{id}', [PartnerController::class, 'create']);
Route::post('store-partner/{id}', [PartnerController::class, 'store']);
Route::get('/show-partner/{id}', [PartnerController::class, 'show']);
Route::get('/edit-partner/{id}', [PartnerController::class, 'edit']);
Route::put('update-partner/{id}', [PartnerController::class, 'update']);
Route::get('/list-partner', [PartnerController::class, 'list']);
Route::get('/request-partner', [PartnerController::class, 'request']);
Route::put('/approve-partner/{id}', [PartnerController::class, 'approve']);
Route::put('/deny-partner/{id}', [PartnerController::class, 'deny']);

//Employee Route
Route::get('/index-employee', [EmployeeControlller::class, 'index']);
Route::get('/create-employee/{id}', [EmployeeControlller::class, 'create']);
Route::post('store-employee/{id}', [EmployeeControlller::class, 'store']);
Route::get('/show-employee', [EmployeeControlller::class, 'show']);

//Customer Route
Route::get('/create-customer/{id}', [CustomerControlller::class, 'create']);
Route::post('store-customer/{id}', [CustomerControlller::class, 'store']);
Route::get('/show-customer/{id}', [CustomerControlller::class, 'show']);
Route::get('/edit-customer/{id}', [CustomerControlller::class, 'edit']);
Route::put('update-customer/{id}', [CustomerControlller::class, 'update']);

//Ticket Route  
Route::get('/index-ticket', [TicketController::class, 'index']);
Route::get('/create-ticket', [TicketController::class, 'create']);
Route::post('store-ticket/{id}', [TicketController::class, 'store']);
Route::get('/show-ticket/{id}', [TicketController::class, 'show']);
// Route::get('/edit-ticket/{id}', [TicketController::class, 'edit']);
// Route::put('update-ticket/{id}', [TicketController::class, 'update']);
Route::get('/list-ticket', [TicketController::class, 'list']); 
Route::get('/buy-ticket/{id}', [TicketController::class, 'buy']); 
Route::put('/approve-ticket/{id}', [TicketController::class, 'approve']);
Route::put('/deny-ticket/{id}', [TicketController::class, 'deny']);

