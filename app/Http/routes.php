<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'UsersController@getAllUsers');
