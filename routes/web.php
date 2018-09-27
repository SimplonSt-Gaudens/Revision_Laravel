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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/roles', 'RoleController@index')->name('role');
Route::get('/role/create', 'RoleController@create')->name('roleCreate');
Route::post('/role/store', 'RoleController@store')->name('roleStore');
Route::get('/role/edit/{id}', 'RoleController@edit')->name('roleEdit');
Route::post('/role/update/{id}', 'RoleController@update')->name('roleUpdate');
Route::get('/role/{id}', 'RoleController@show')->name('roleShow');
Route::get('/role/destroy/{id}', 'RoleController@destroy')->name('roleDestroy');
