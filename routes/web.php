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


//Route::group(['middleware' => ['auth']], function() {
//
//    Route::resource('roles','RoleController');
//    Route::resource('users','UserController',['only'=>[
//        'index','edit','update','destroy','store']]);
//    Route::resource('products','ProductController',['except'=>[
//        'show']]);
//
//});
//Route::get('/home','MainController@index')->name('user');
//Route::get('/home','MainController@index')->name('index');

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');

    Route::resource('users','UserController');
    Route::resource('products','ProductController');

    Route::get('/home','MainController@index')->name('index');
    Route::post('/getall','MainController@getall')->name('getall');
    Route::post('/getlatest','MainController@getlatest')->name('getlatest');
    Route::post('/lock','MainController@lock')->name('lock');
    Route::post('/change_stat_type','MainController@change_stat_type')->name('change_stat_type');
    Route::get('/purchase/{product}','AbonnementController@purchase')->name('purchase');
    Route::get('/', 'MainController@index');

});


//
