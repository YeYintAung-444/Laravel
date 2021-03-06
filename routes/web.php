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

/*Route::get('/', function () {
	return 'Hello Laravel';
    //return view('welcome');
});

Route::get('testing',function(){
	return 'Testing Page';
});*/

//Frontend
/*Route::get("/",'FirstController@index')->name('homepage');

Route::get("about",'FirstController@about')->name('aboutpage');

Route::get("contact",'FirstController@contact')->name('contactpage');*/


//Backend

Route::get('dashboard','BackendController@dashboard')->name('dashboardpage');
Route::resource('categories','CategoryController');