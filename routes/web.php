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

/*Route::get('/', function () {
    return view('welcome');
});*/

/** Global Routes */
Route::get('/', [
    'uses' => '\ree\Http\Controllers\GlobalController@getIndex',
'as' => 'global.index',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/** Ads Routes */
Route::get('/add/ad', [
    'uses' => '\ree\Http\Controllers\AdsController@addAd',
'as' => 'ads.index',
]);


/** Admin Routes */
Route::get('/reeltd', [
    'uses' => '\ree\Http\Controllers\ReeLTDController@getIndex',
'as' => 'reeltd.index',
]);

/** Admin Routes */
Route::get('/reeltd/locked', [
    'uses' => '\ree\Http\Controllers\ReeLTDController@getLock',
'as' => 'reeltd.lock',
]);