<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('models', 'ModelController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::get('/leave', ['as' => 'leave', 'uses' => 'LeaveController@index']);
    Route::get('/mc', ['as' => 'mc', 'uses' => 'mcController@index']);
    Route::get('/al', ['as' => 'al', 'uses' => 'alController@index']);
    Route::get('/ul', ['as' => 'ul', 'uses' => 'ulController@index']);
	Route::put('mc', ['as' => 'mc.create', 'uses' => 'mcController@create']);

    });

    // Route::get('/leaves/typeleave', 'LeaveController');


