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
    Route::get('/{id}/edit', 'PlayerController@edit');
    Route::put('/{id}', 'PlayerController@update');
    // friend
    Route::resource('/friend', 'FriendController');
    Route::get('/friend/accept/{id}','FriendController@accept');
    Route::get('/friend/deny/{id}','FriendController@deny');
    
    // doctor
    Route::resource('/doctor','DoctorController');
    // coach
    Route::resource('/coach','CoachController');
    
    // social
    Route::resource('/social','SocialController');
    Route::post('/social/comment','SocialController@comment');
    Route::resource('/activity', 'ActivityController');
    Route::get('/activity/{id}/join','ActivityController@join');
    
    // group
    Route::resource('/group','GroupController');
    Route::resource('/post','PostController');
    Route::post('/post/comment','PostController@comment');
    Route::get('/group/{id}/join','GroupController@join');
    
    // health
    Route::resource('/health/data','health\DataController');
    Route::get('/health/json','health\DataController@getJsonData');
    // sports
    Route::resource('/sports/data','sports\DataController');
});

// coach路由
Route::group(['prefix'=> 'coach','namespace' => 'coach'],function(){
    Route::resource('/','CoachController');  
    Route::get('/trainer','CoachController@trainer');  
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
Route::group(['prefix'=> 'admin'],function(){
    Route::resource('/','AdminController'); 
    // 创建
    Route::get('/create/doctor','AdminController@getDoctor');
    Route::get('/create/coach','AdminController@getCoach');
});

Route::resource('/', 'Auth\AuthController@getLogin');

// 认证路由
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register','Auth\AuthController@getReg');
Route::post('auth/reg','Auth\AuthController@postReg');

Route::resource('/rbac','Auth\RBACController');
