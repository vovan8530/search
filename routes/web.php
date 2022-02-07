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
  return redirect('login');
});

# TODO: #### PAGES ####

Route::group(['middleware' => 'auth'], function () {
  Route::get('search', function () {
    return view('pages.search-form');
  })->name('search');
  Route::get('hosts', function () {
    return view('pages.hosts');
  })->name('hosts');
});

# TODO: #### PAGES ####

require __DIR__.'/auth.php';


