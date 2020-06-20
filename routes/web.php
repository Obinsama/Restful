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
Route::get('/home','MainController@index')->name('index');
Route::post('/getall','MainController@getall')->name('getall');
Route::post('/getlatest','MainController@getlatest')->name('getlatest');

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

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
