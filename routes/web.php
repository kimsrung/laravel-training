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


Auth::routes();

Route::group([ 'middleware' => ['auth']], function() {
  Route::get('/home', 'HomeController@index');

  Route::group(['prefix' => '/users'], function() {
    Route::get('', 'UsersController@index');

    Route::get('{id}', 'UsersController@edit');

    Route::put('{id}', ['as' => 'user.update', 'uses' => 'UsersController@update']);
  });

});
