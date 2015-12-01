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
// player路由
Route::group(['prefix' => 'player','namespace' => 'player'], function() {
    Route::resource('/', 'PlayerController');
});

// coach路由
Route::group(['prefix'=> 'coach','namespace' => 'coach'],function(){
    Route::resource('/','CoachController');    
});
// doctor路由
Route::group(['prefix'=> 'doctor','namespace' => 'doctor'],function(){
    Route::resource('/','DoctorController');    
});
// admin路由
Route::group(['prefix'=> 'admin','namespace' => 'admin'],function(){
    Route::resource('/','AdminController');    
});

Route::get('/', 'Auth\AuthController@getLogin');

// 认证路由
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');