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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('profile', ['as' => 'users.profile', 'uses' => 'HomeController@viewProfile']);
Route::get('profile', ['as' => 'individual_user.profile', 'uses' => 'HomeController@viewIndividualUserProfile']);


Route::group(['prefix'=>'individual_user'], function() {

// Login Routes...
    Route::get('login', ['as' => 'individual_user.login', 'uses' => 'IndividualUserAuth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'IndividualUserAuth\LoginController@login']);
    Route::post('logout', ['as' => 'individual_user.logout', 'uses' => 'IndividualUserAuth\LoginController@logout']);

// Registration Routes...
    Route::get('register', ['as' => 'individual_user.register', 'uses' => 'IndividualUserAuth\RegisterController@showRegistrationForm']);
    Route::post('register', ['uses' => 'IndividualUserAuth\RegisterController@register']);

// Password Reset Routes...
    Route::get('password/reset', ['as' => 'individual_user.password.reset', 'uses' => 'IndividualUserAuth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'individual_user.password.email', 'uses' => 'IndividualUserAuth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'individual_user.password.reset.token', 'uses' => 'IndividualUserAuth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['uses' => 'IndividualUserAuth\ResetPasswordController@reset']);
});

Route::view('/individual_user/home', 'individualuser-home')->middleware('individual_user');
