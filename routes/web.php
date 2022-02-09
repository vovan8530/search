<?php

use App\Http\Controllers\HostController;
use App\Http\Controllers\IpAddressController;
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
  Route::get('search-form', [HostController::class, 'searchForm'])->name('search-form');
  Route::get('hosts', [HostController::class, 'index'])->name('hosts');
  Route::post('search', [IpAddressController::class, 'searchIpAddress'])->name('search');
});

# TODO: #### PAGES ####

require __DIR__ . '/auth.php';


