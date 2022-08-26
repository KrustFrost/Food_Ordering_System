<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Queue\QueueController;
use App\Http\Controllers\Queue\Queuelogin;
use App\Http\Controllers\Order\OrderSystem;
use App\Http\Controllers\Order\OrderListsController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\UserProfileController;
use App\Http\Livewire\Admin;
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
})->name('home');

Route::post('/logout',[LogoutController::class,'destroy'])->name('logout');
Route::group(['prefix' => 'register'], function(){
    Route::get('/',[RegisterController::class,'index'])->name('auth.register');
    Route::post('/',[RegisterController::class,'store']);
});

Route::get('/admin',Admin::class)->name('admin');

Route::group(['prefix' => 'admin/login'], function(){
    Route::get('/',[Queuelogin::class,'index'])->name('queuelogin');
    Route::post('/',[Queuelogin::class,'store']);
});

Route::group(['prefix' => '/order/Order_Lists'], function(){
    Route::get('/Quattro_Stagioni',[OrderListsController::class,'QS'])
    ->name('Order.Quattro_Stagioni');
    Route::get('/Marinara',[OrderListsController::class,'Mar'])
    ->name('Order.Marinara');
    Route::get('/Margherita',[OrderListsController::class,'Margh'])
    ->name('Order.Margherita');
    Route::get('/Napoletana_or_Napoli',[OrderListsController::class,'Nap'])
    ->name('Order.Napoletana_or_Napoli');
    Route::get('/Quattro_Formaggi',[OrderListsController::class,'Form'])
    ->name('Order.Quattro_Formaggi');
    Route::get('/Prosciutto_Crudo',[OrderListsController::class,'Pro'])
    ->name('Order.Prosciutto_Crudo');
});

Route::group(['prefix' => 'order'], function(){
    Route::get('/',[OrderSystem::class,'index'])
    ->name('Order.OrderSystem');
    Route::post('/',[OrderSystem::class,'store']);
});

Route::group(['prefix' => 'login'], function(){
    Route::get('/',[LoginController::class,'index'])->name('login');
    Route::post('/',[LoginController::class,'store'])->middleware("throttle:10,2");
});

Route::group(['prefix' => 'Profile'], function(){
Route::get('/',[UserProfileController::class,'index']);
Route::post('/',[UserProfileController::class,'update'])->name('Profile');
Route::get('Orders/put_cash',[UserProfileController::class,'putcashview'])->name('putcash');
Route::post('/put_cash',[UserProfileController::class,'putcash'])->name('putcashpost');
Route::get('/receipt',[UserProfileController::class,'receipt'])->name('receipt');
Route::get('Orders/debitcard',[UserProfileController::class,'debitcard'])->name('debitcard');
Route::post('Orders/debitcard',[UserProfileController::class,'debitcardpost'])->name('debitcardpost');
Route::get('/Orders',[UserProfileController::class,'orderuser'])->name('orderuser');
Route::post('/Orders',[UserProfileController::class,'removepizzaorder']);
Route::delete('/Orders',[QueueController::class,'deleteorder'])->name('deleteorder');
});
Route::delete('/Orders',[QueueController::class,'removepizzaorder'])->name('removepizzaorder');
Route::get('/update',[UpdateController::class,'index'])->name('update');