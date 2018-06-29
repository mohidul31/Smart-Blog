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

Route::get('/Dashboard','DashboardController@index');
Route::get('/Login','LoginController@index');

Route::get('/PostTag','PostTagController@index');
Route::get('/PostTag/Create','PostTagController@create');
Route::get('/PostTag/Edit/{postTag}','PostTagController@edit');
Route::get('/PostTag/Delete/{postTag}','PostTagController@destroy');
Route::post('/PostTag/Store','PostTagController@store');
Route::post('/PostTag/Update/{postTag}','PostTagController@update');



