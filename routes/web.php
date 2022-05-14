<?php

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


Route::get('/books', function () {
     // get data from a database
  $books = [
    ['author' => 'eleonora', 'title' => 'mamma'],
    ['author' => 'andrea', 'title' => 'babba'],
    ['author' => 'luce', 'title' => 'cice']
  ];
  return view('books', ['books' => $books]);
});


Route::get('/dashboard', function () {

return view('dashboard');
});