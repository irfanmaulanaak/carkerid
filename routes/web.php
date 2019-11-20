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

Route::get('/home', 'indexController@index');
Route::get('/postjob', 'indexController@postjob');

Route::get('/login', 'authController@show');
Route::post('/loginPost', 'authController@check_login');
Route::get('/logout', 'authController@logout');



