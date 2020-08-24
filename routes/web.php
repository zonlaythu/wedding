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
// Backend
// --------
Route::middleware('role:admin')->group(function(){

Route::get('/dashboard', 'BackendController@dashboard')->name('dashboard');
Route::resource('/categories','CategoryController');
Route::resource('/services','ServiceController');
Route::resource('/packages','PackageController');
Route::get('/select2','PackageController@getdata')->name('select2');
});


Route::resource('/orders','OrderController');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
