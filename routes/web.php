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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/', 'AdminauthController@showlogin')->name('admin.login');
    Route::post('/login', 'AdminauthController@login');
    Route::get('/logout', 'AdminauthController@logout')->name('admin.logout');

});
