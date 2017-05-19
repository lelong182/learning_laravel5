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

Route::resource('todo', 'TodoController');

Route::get('/', function () {
  return view('file.home');
});

Route::get('/about', 'TestController@about');

Route::get('/contact', 'TestController@contact');

Route::post('/send', 'MailController@send');

Route::get('/email', 'MailController@email');

Route::get('/sendNew', 'MailController@sendNew');

Route::get('/test', function () {
  return 'Test';
});