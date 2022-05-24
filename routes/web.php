<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;



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

Route::get('/dashboard', function () {
  return view('dashboard');
  })->middleware('auth');

Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// books routes
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);
Route::get('/edit-books/{id}', [BookController::class, 'edit']);
Route::put('/edit-books/{id}', [BookController::class, 'update']);

// customers routes
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/create', [CustomerController::class, 'create']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::get('/customers/{id}', [CustomerController::class, 'show']);
Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);
Route::get('/edit-customers/{id}', [CustomerController::class, 'edit']);
Route::put('/edit-customers/{id}', [CustomerController::class, 'update']);

// orders routes
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/create', [OrderController::class, 'create']);
Route::post('/orders', [OrderController::class, 'store']);
Route::get('/orders/{id}', [OrderController::class, 'show']);
// Route::delete('/orders/{id}', [OrderController::class, 'destroy']);
Route::get('/edit-orders/{id}', [OrderController::class, 'edit']);
Route::put('/edit-orders/{id}', [OrderController::class, 'update']);

