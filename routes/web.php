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

// Login Routes
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Registration Routes
Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

// Students
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'StudentController@index');
    Route::group(['prefix' => 'students-ajax'], function () {
        Route::match(['get', 'post'], 'create', 'StudentController@create');
        Route::match(['get', 'put'], 'update/{id}', 'StudentController@update');
        Route::delete('delete/{id}', 'StudentController@delete');
    });

});
