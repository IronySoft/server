<?php

//use Illuminate\Http\Request;
//
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::get('/', [
//    'uses' => 'HomeController@firstFunction',
//    'as' => '/'
//]);
Route::resource('/book', 'ApiController');

Route::get('/test', [
    'uses' => 'TestController@test',
    'as' => 'test'
]);
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
    Route::post('category-info', 'CategoryController@fetchCategoryInfo');
});