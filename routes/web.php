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


});


//Frontend
// --------------

Route::get('/', 'FrontendController@home')->name('index');

Route::get('package','FrontendController@package')->name('packagename');

Route::get('detail/{id}','FrontendController@detail')->name('detailname');


Route::get('/service', 'FrontendController@filtercategory')->name('sidebar');
Route::post('fcategory/{id}','FrontendController@fcategory')->name('fcategory');


Route::post('customdetail/{id}','FrontendController@custom')->name('customname');

Route::get('checkout','FrontendController@checkout')->name('checkout');

Route::resource('orders','OrderController');
Route::resource('custompackages','CustomController');


Route::get('profile','FrontendController@profile')->name('profilename');

Route::post('userdetail','FrontendController@userdetail')->name('userdetail');

Route::get('about','FrontendController@about')->name('aboutname');
Route::get('contact','FrontendController@contact')->name('contactname');

Auth::routes();
// Route::get('/', 'HomeController@index')->name('home');	
Route::post('/getitems','FrontendController@getItems')->name('getitems');

