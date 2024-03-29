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


Auth::routes();

Route::get('/', 'ChatController@index')->name('view.chat');
Route::get('/chat', 'ChatController@index')->name('view.chat');
Route::post('/send', 'ChatController@create')->middleware('check.login')->name('create.chat');