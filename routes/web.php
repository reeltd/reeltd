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


/** Ads Routes */
Route::get('/add/ad', [
    'uses' => '\ree\Http\Controllers\AdsController@addAd',
'as' => 'ads.index',
]);


/** Admin Routes */
Route::get('/ree', [
    'uses' => '\ree\Http\Controllers\ReeLTDController@getIndex',
'as' => 'reeltd.index',
]);