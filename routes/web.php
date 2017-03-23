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
Route::get('/', function ()
{
  return view('welcome');
});

Auth::routes();

Route::group([ 'middleware' => ['auth']], function() {
  Route::get('/home', 'HomeController@index');

  Route::group(['prefix' => '/users'], function() {
    Route::get('', ['as' => 'user.list', 'uses' =>'UsersController@index']);

    Route::get('{user}', ['as' => 'user.edit', 'uses' =>'UsersController@edit']);

    Route::put('{user}', ['as' => 'user.update', 'uses' => 'UsersController@update']);

    Route::delete('{user}', ['as' => 'user.delete', 'uses' => 'UsersController@destroy']);
  });

  Route::group(['prefix' => '/roles', 'middleware' => 'only-admin'], function() {
    Route::get('', ['as' => 'role.list', 'uses' =>'RolesController@index']);
    Route::get('new', ['as' => 'role.create', 'uses' =>'RolesController@create']);
    Route::post('', ['as' => 'role.save', 'uses' =>'RolesController@save']);
  });


});
