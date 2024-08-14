<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('customers/highest-spending', [CustomerController::class, 'highestSpendingCustomer'])->name('customers.highestSpending');
Route::get('customers/most-orders', [CustomerController::class, 'mostOrdersCustomer'])->name('customers.mostOrders');
Route::resource('products', ProductController::class);

Route::get('/', function () {
    return view('index.index');
})->name('index.index');

