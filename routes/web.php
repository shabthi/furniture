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
Route::get('/chairs', 'ChairController@home');
Route::post('/chairsAll', 'ChairController@show');
Route::post('/chairsSearch', 'ChairController@search');
Route::post('/updatedPage', 'ChairController@update');
Route::post('/buyUpdate', 'ChairController@buyUpdate');

Route::get('/tables', 'TableController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

