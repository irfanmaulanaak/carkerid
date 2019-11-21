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
Route::get('/postjob', 'jobController@showPostJob');

Route::get('/pekerjaan/{id}','applyController@apply');

Route::get('/login', 'authController@getLogin');
Route::post('/loginPost', 'authController@check_login');
Route::get('/register', 'authController@getRegister');
Route::post('/registerPost', 'authController@postRegister');
Route::get('/cv', 'cvController@show');
Route::get('/cvpost', 'cvController@updatecv');
Route::get('/logout', 'authController@logout');

Route::get('/jobpost', 'jobController@postJob');



