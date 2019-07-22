<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|kef je najgori instruktor
najgori covjekgol
*/

use App\Mail\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {


    Route::get('/task/addTask', 'TaskController@addTask')->name('task.addTask');
    Route::post('/task/addTask', 'TaskController@saveTask')->name('task.saveTask');
    Route::post('/task/newTask', 'TaskController@newTask')->name('task.newTask');
Route::get('/city/addCity', 'CityController@addCity')->name('city.addCity');
Route::post('/city/addCity', 'CityController@store')->name('city.saveCity');

    Route::get('/users','UsersController@index')->name('users');

    Route::get('/users/updateCity',['as' => 'users.updateCity', 'uses'=>'UsersController@update']);
    Route::post('/users/updateCity', 'UsersController@storeCity')->name('users.storeCity');

	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
Auth::routes();
Route::get('/mail/sendMail', 'MailController@index')->name('mail.sendMail');
Route::get('/city/updateCity', 'CityController@index')->name('city.updateCity');
Route::post('/city/updateCity', 'CityController@store')->name('city.storeCity');

Route::get('/mail/resetPassword', 'MailController@reset')->name('mail.resetPassword');
Route::post('/password/reset', 'MailController@sendResetLinkEmail')->name('mail.reset');
Route::post('/password/reset/url', 'MailController@saveNewPassword')->name('saveNewPassword');

