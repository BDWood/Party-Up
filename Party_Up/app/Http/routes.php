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

Route::get('/', function() {
    return redirect('home');
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/**********************************************
    Account Routes
**********************************************/

Route::get('auth/register', 'UserController@create');
Route::get('user', 'UserController@view');
Route::get('user/{id}/edit', 'UserController@edit');
Route::post('user/{id}/edit', 'UserController@postEdit');
// Route::get('archive/{id}', 'UserController@archive');

/**********************************************
    Search Routes
**********************************************/

Route::get('search', function() {
    return view('search');
});

/**********************************************
    Archived Players
**********************************************/

Route::get('archive', 'FriendController@showFriends');
Route::get('archive_user', 'FriendControllet@showFriend');
