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


Route::get('/invoice_form', ['as' => 'user.invoice_form', 'uses' => 'CompanyInvoiceController@index']);
Route::post('/invoice_form', ['as' => 'user.invoice_form', 'uses' => 'CompanyInvoiceController@storeInvoice']);

Route::get('/notification', function(){
    return view('notification');
});

Route::get('/transaction_history', ['as' => 'user.transaction_history', 'uses' => 'CompanyInvoiceController@viewTransactionHistory']);


Route::get('individual_user/profile', ['as' => 'individual_user.profile', 'uses' => 'IndividualUserController@viewIndividualUserProfile']);
Route::get('individual_user/kyc', ['as' => 'individual_user.kyc', 'uses' => 'KYCController@viewIndividualUserKyc']);
Route::post('individual_user/kyc', ['as' => 'individual_user.kyc', 'uses' => 'KYCController@storeKYC']);

Route::get('individual_user/invoice_form', ['as' => 'individual_user.invoice_form', 'uses' => 'InvoiceController@index']);
Route::post('individual_user/invoice_form', ['as' => 'individual_user.invoice_form', 'uses' => 'InvoiceController@storeInvoice']);
Route::get('notification', ['as' => 'notification', 'uses' => 'NotificationController@send']);

Route::get('/individual_user/notification', function(){
   return view('notification');
});

Route::get('individual_user/transaction_history', ['as' => 'individual_user.transaction_history', 'uses' => 'InvoiceController@viewTransactionHistory']);
Route::get('/check_invoice', function (){
   return view('check_invoice');
});
Route::get('/payment', ['as' => 'check_invoice', 'uses'=> 'PaymentController@checkInvoice']);


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

// Admin Routes....
Route::group(['prefix'=>'admin'], function() {
    // Login Routes...
    Route::get('login', ['as' => 'admin.login', 'uses' => 'AdminAuth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'AdminAuth\LoginController@login']);
    Route::post('logout', ['as' => 'admin.logout', 'uses' => 'AdminAuth\LoginController@logout']);


// Registration Routes...
    Route::get('register', ['as' => 'admin.register', 'uses' => 'AdminAuth\RegisterController@showRegistrationForm']);
    Route::post('register', ['uses' => 'AdminAuth\RegisterController@register']);

// Password Reset Routes...
    Route::get('password/reset', ['as' => 'admin.password.reset', 'uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'admin.password.email', 'uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'admin.password.reset.token', 'uses' => 'AdminAuth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['uses' => 'AdminAuth\ResetPasswordController@reset']);
});

Route::view('/admin/home', 'admin')->middleware('admin');

Route::get('admin/all_transactions', ['as' => 'admin.all_transactions', 'uses' => 'InvoiceController@showAllTransactions']);

Route::get('/test', function(){
    $banks = json_decode(file_get_contents('https://techpay.technorio.com.np/sandbox/public/api/v1/nPay/get-bank-list?serviceCode=TOBPS&serviceApiKey=TOBPS'));
        dd($banks);
});
