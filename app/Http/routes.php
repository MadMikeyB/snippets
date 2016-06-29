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

// Authentication Routes...
Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@showLoginForm']);
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);

// Registration Routes...
Route::get('register', ['as' => 'register', 'uses' => 'Auth\AuthController@showRegistrationForm']);
Route::post('register', 'Auth\AuthController@register');

// Password Reset Routes...
Route::get('password/reset/{token?}', ['as' => 'password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

// Home
Route::get('/', ['as' => 'home', 'uses' => 'SnippetsController@index']);

// Snippets
Route::resource('snippets', 'SnippetsController');
Route::get('snippets/{snippets}/preview', 'SnippetsController@preview');


// Tags
Route::resource('tags', 'TagsController');

// Comments
Route::post('snippets/{snippet}/comment', 'CommentsController@store');