<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

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

// Invoice
Route::get('/', [InvoiceController::class, 'show']);
Route::get('invoice', [InvoiceController::class, 'create']);
Route::post('invoice', [InvoiceController::class, 'store']);
Route::post('invoice/API-addition', [InvoiceController::class, 'addition']);


// Customer
Route::get('client', [CustomerController::class, 'create']);
Route::post('client', [CustomerController::class, 'store']);
Route::get('clients', [CustomerController::class, 'show']);

// Product
Route::get('product', [ProductController::class, 'create']);
Route::post('product', [ProductController::class, 'store']);
Route::get('products', [ProductController::class, 'show']);