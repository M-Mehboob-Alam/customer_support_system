<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\TicketController;
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
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/package/subscribe/{id}', [PackagesController::class, 'subscribePackage'])->name('subscribe.package');
    Route::get('/place/order/now', [OrderController::class, 'placeOrder'])->name('place.order.now');
Route::get('/create/ticket', [TicketController::class, 'createTicket'])->name('create.user.ticket');
});
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    //All the routes that belongs to the group goes here
    Route::get('dashboard', function () {});
});
Route::group(['prefix' => 'developer', 'middleware' => 'develooper'], function () {
    //All the routes that belongs to the group goes here
    Route::get('dashboard', function () {});
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
