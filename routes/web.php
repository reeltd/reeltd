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
Route::get('/ads', [
    'uses' => '\ree\Http\Controllers\AdsController@getAdsIndex',
'as' => 'ads.index',
'middleware' => ['auth'],
]);


/** Admin Routes */
Route::get('/reeltd', [
    'uses' => '\ree\Http\Controllers\ReeLTDController@getIndex',
'as' => 'reeltd.index',
'middleware' => ['auth'],
]);


/** Ads Routes */
Route::get('/reeltd/new-ad', function () {
    return view('reeltd.new');
});

Route::get('/reeltd/edit-ad', function () {
    return view('reeltd.edit');
});

Route::get('/reeltd/delete-ad', function () {
    return view('reeltd.delete');
});


/** Admin Routes */
Route::get('/reeltd/locked', [
    'uses' => '\ree\Http\Controllers\ReeLTDController@getLock',
'as' => 'reeltd.lock',
'middleware' => ['auth'],
]);


/** Profile Routes */
Route::get('/profile', [
    'uses' => '\ree\Http\Controllers\ProfileController@getIndex',
'as' => 'profile.index',
'middleware' => ['auth'],
]);


/** Docs Routes */
Route::get('/docs', function () {
    return view('docs.index');
});