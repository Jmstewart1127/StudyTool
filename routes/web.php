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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'web'], function () {

    Auth::routes();

    Route::resource('groups', 'GroupsController');

    Route::get('groups/show/open', 'GroupsController@showOpenGroups');

    Route::get('groups/show/{id}', 'GroupsController@showGroupById');

});