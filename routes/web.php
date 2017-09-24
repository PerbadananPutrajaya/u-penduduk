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

Route::get('/', function () {
    return view('home');
});
Route::get('/address', function () {
    return view('address');
});

Route::get('login', 'LoginController@showLoginPage');
Route::get('login/{provider}', 'LoginController@auth')
    ->where(['provider' => 'facebook|google|twitter|live']);
Route::get('login/{provider}/callback', 'LoginController@login')
    ->where(['provider' => 'facebook|google|twitter|live']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('logout', 'LoginController@logout');
    Route::get('showUserProfile', 'LoginController@showUserProfile');
    Route::resource('residents', 'ResidentController');
    Route::post('storeUserProfile', 'ResidentController@storeUserProfile');
    Route::post('residents/storeByNric', 'ResidentController@storeByNric');
    Route::post('residents/storeByPassport', 'ResidentController@storeByPassport');
    // Admin's Dashbaord
    Route::get('dashboard', 'LoginController@showDashBoard');
    Route::get('dashboard/residents','DashboardController@residentsList');
    Route::get('dashboard/residences','DashboardController@residencesList');
});
