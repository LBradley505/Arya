<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'ConnectionsController@getConnectionList')->name('query');
	Route::get( '/connections', 'ConnectionsController@display')->name('connections');
//	Route::get( '/query', 'ConnectionsController@getConnectionList')->name('query');

	//AJAX
	Route::post( 'query', 'ConnectionsController@query');
	Route::post( 'connections', 'ConnectionsController@create');
});




