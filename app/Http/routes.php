<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'UsersController@getAllUsers');

/*
	Registering a user
*/
	Route::post('/check-if-username-exists', 'RegisterController@checkIfUsernameExists');
	Route::post('/register-user', 'RegisterController@create');


/*
	Login a user
*/

	Route::post('/login-user', 'LoginController@loginUser');