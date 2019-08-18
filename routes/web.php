<?php


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ViewController@index')->name('/');

//Route::resource('user', 'UserController');

