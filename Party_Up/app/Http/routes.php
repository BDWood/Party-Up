<?php

use App\User;

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
Route::get('games/{id}', 'UserController@addGames');
Route::post('games/{id}', 'UserController@postAddGames');

/**********************************************
    Search Routes
**********************************************/

Route::get('search', 'SearchController@view');
Route::post('search', 'SearchController@postSearch');
Route::get('search_results', 'SearchController@results');

/**********************************************
    Archived Players
**********************************************/

Route::get('archive', 'FriendController@showFriends');
Route::get('archive_user', 'FriendControllet@showFriend');

// Route::get('testusergames/{id}', function($id) {
//     $user = User::find($id);
//     dd($user->games);
// });