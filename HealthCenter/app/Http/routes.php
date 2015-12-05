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
    Route::get('/{id}/edit', 'PlayerController@edit');// why not found?
    Route::put('/{id}', 'PlayerController@update');// why not found?
    
    Route::resource('/friend', 'FriendController');
    Route::resource('/social','SocialController');
    Route::post('/social/comment','SocialController@comment');
    Route::resource('/activity', 'ActivityController');
    Route::get('/activity/{id}/join','ActivityController@join');
});

// coach路由
Route::group(['prefix'=> 'coach','namespace' => 'coach'],function(){
    Route::resource('/','CoachController');  
    Route::resource('/coach_train','TutorialController');  
});
// doctor路由
Route::group(['prefix'=> 'doctor','namespace' => 'doctor'],function(){
    // 主页
    Route::resource('/','DoctorController');
    // 建议
    Route::resource('/advice','AdviceController');
    // 日历操作
    Route::resource('/calendar','CalendarController');
    // 用户相关
    Route::get('/playersports/{id}','PlayerController@getSports');
    Route::get('/playerhealth/{id}','PlayerController@getHealth');
    // 用户申请
    Route::get('/accept/{id}','PlayerController@accept');
    Route::get('/deny/{id}','PlayerController@deny');
});
// admin路由
Route::group(['prefix'=> 'admin','namespace' => 'admin'],function(){
    // Route::resource('/','AdminController');    
});

Route::get('/', 'Auth\AuthController@getLogin');

// 认证路由
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register','Auth\AuthController@getReg');
Route::post('auth/register','Auth\AuthController@postReg');
