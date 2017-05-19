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

//Route::get('/', function () {
//  return view('welcome');
//});
//
//Route::get('about', function () {
//  $bitfumes = ['This', 'is', 'Bitfumes'];
//  return view('about', compact('bitfumes'));
//});

Route::get('/', 'PagesController@welcome');
Route::get('about', 'PagesController@about');
Route::resource('songs', 'SongsController');