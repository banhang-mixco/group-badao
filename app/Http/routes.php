<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/home',[ 'as'=>'home','uses'=>'HomeController@index']);
Route::get('/admin',[ 'as'=>'admin','uses'=>'HomeController@admin','middleware'=>['auth','RoleAdmin']]);

Route::get('/login',['as'=>'login','uses'=>'AuthController@getlogin','middleware'=>['guest']]);
Route::post('/login',['as'=>'login','uses'=>'AuthController@postlogin','middleware'=>['guest']]);
Route::get('/register',['as'=>'register','uses'=>'AuthController@getregister','middleware'=>['guest']]);
Route::post('/register',['uses'=>'AuthController@postregister','middleware'=>['guest']]);
Route::get('/signout',['as'=>'logout' ,'uses'=>'AuthController@getlogout']);
Route::get('social/facebook',['as'=>'facebook','uses'=>'FaceController@getSocialAuth','middleware'=>['guest']]);
Route::get('social/callback/facebook',['uses'=>'FaceController@getSocialAuthCallback','middleware'=>['guest']]);
Route::get('social/google',['as'=>'google','uses'=>'GoogleController@getSocial','middleware'=>['guest']]);
Route::get('social/callback/google',['uses'=>'GoogleController@getSocialCallback','middleware'=>['guest']]);