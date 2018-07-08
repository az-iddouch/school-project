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


Route::get('/', 'ServicesController@index');
Route::get('/services/{service}', 'ServicesController@show');

Route::get('/cart', 'CartController@index');
Route::post('/cart', 'CartController@create')->name('cart_post');
Route::get('/cart/empty', function (){
    Cart::destroy();
});
Route::post('/cart/saveForLater/{service}', 'CartController@saveForLater');

Route::delete('/cart/{service}', 'CartController@destroy');


// Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');


// Authentication Routes...
// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->middleware('guest');
Route::post('logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');

// Registration Routes...
// $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->middleware('guest');

// Password Reset Routes...
//NOT DONE YET !!!! 
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

