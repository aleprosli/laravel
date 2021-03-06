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
    // Route::resource('leave', 'LeaveController');
    Route::resource('mc', 'mcController');
    Route::resource('al', 'alController');
    Route::resource('ul', 'ulController');
    Route::resource('addUser', 'addUserController');

    Route::get('/leave/action/approve/{mcfId}', ['as' => 'admin.action.approve', 'uses' => 'LeaveController@actionApprove']);
    Route::get('/leave/action/decline/{mcfId}', ['as' => 'admin.action.decline', 'uses' => 'LeaveController@actionDecline']);

	// Route::post('mc', ['as' => 'mc.create', 'uses' => 'mcController@create']);

    });

    // Route::get('/leaves/typeleave', 'LeaveController');


