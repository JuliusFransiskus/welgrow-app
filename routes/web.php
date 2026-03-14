<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::view('/', 'home')->name('dashboard');

Route::view('/profile', 'profile')->name('profile');
Route::view('/settings', 'settings')->name('settings');
Route::view('/billing', 'billing')->name('billing');
Route::view('/pricing', 'pricing')->name('pricing');
Route::view('/404-error', '404-error')->name('error404');
Route::view('/customers.customer_new', 'customer_new')->name('customer_new');

use App\Http\Controllers\CustomerController;
Route::resource('customers', CustomerController::class);

use App\Http\Controllers\VendorController;
Route::resource('vendors', VendorController::class);

Route::view('/bo_new', 'bookingorder.bo_new')->name('bo_new');