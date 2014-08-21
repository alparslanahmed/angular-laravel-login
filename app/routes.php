<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
	
Blade::setContentTags('[[', ']]'); 		
Blade::setEscapedContentTags('[[[', ']]]');

Route::get('/', function()
{
	return View::make('index');
});

Route::group(array('prefix' => 'api'), function() {

	Route::post( '/login', array(
		'before' => 'csrf',
    	'as' => 'login.login',
    	'uses' => 'LoginController@login'
	));

	Route::resource('/uye/profil', 'UyeController@profil');

	Route::get('/logout', array('uses' => 'LoginController@logout'));

});