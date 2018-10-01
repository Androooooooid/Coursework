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

Route::group(['middleware'=>'web'],function() {
	
	Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
	Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page']);
	
	Route::auth();
	
});

Route::group(['prefix'=>'admin','middleware'=>'auth'], function() {
	
	Route::get('/',function() {
		
		
	});
	
Route::group(['prefix'=>'pages'], function() {
	
	Route::get('/',['uses'=>'PageController@execute','as'=>'pages']);
	
	Route::match(['get','post'],'/add',['uses'=>'PageController@execute','as'=>'pagesAdd']);
	
	Route::match(['get','post','delete'],'/edit/',['uses'=>'PagesController@execute','as'=>'pagesEdit']);
	
});

Route::group(['prefix'=>'sevices'], function() {
	
	Route::get('/',['uses'=>'ServiceController@execute','as'=>'sevices']);
	
	Route::match(['get','post'],'/add',['uses'=>'ServiceController@execute','as'=>'serviceAdd']);
	
	Route::match(['get','post','delete'],'/edit/',['uses'=>'ServiceController@execute','as'=>'serviceEdit']);
	
});
});