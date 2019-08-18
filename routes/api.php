<?php


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([

//    'middleware' => 'api',
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('save', 'AuthController@save');


    Route::apiResource('brand', 'BrandController');


});


//Route::group([
//
////    'middleware' => 'api',
//    'as' => 'api.'
//
//], function () {
//
    Route::resource('user', 'UserController');
//
//    Route::get('user/create', 'UserController@create')->name('user.create');
//});

