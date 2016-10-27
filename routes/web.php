<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
// Auth::routes();

Route::get('/', function () {
    return view('estubook.index');
})->name('home');
Route::get('/academia/{slug}', ['as' => 'search-academy', 'uses' => 'AcademiesController@search']);

// administracion
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
  require 'admin/admin.php';
});

// Route::get('/home', 'HomeController@index');


Route::get('login', [
    'uses' => 'Auth\LoginController@showLoginForm',
    'as' => 'login',
]);

Route::post('login', [
    'uses' => 'Auth\LoginController@login',
    'as' => 'auth.login',
]);

Route::post('logout', [
    'uses' => 'Auth\LoginController@logout',
    'as' => 'auth.logout',
]);

Route::get('register', [
    'uses' => 'Auth\RegisterController@showRegistrationForm',
    'as' => 'register',
]);
Route::post('register', [
    'uses' => 'Auth\RegisterController@register',
    'as' => 'auth.register',
]);

Route::get('password/reset/{token?}', [
    'uses' => 'Auth\ResetPasswordController@showResetForm',
    'as' => 'password.reset',
]);

Route::post('password/reset', [
    'uses' => 'Auth\ResetPasswordController@reset',
    'as' => 'password.reset.post',
]);

Route::get('password/email', [
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm',
    'as' => 'password.email.reset',
]);

Route::post('password/email', [
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail',
    'as' => 'password.email.post',
]);

Route::get('profile', [
    'uses' => 'Auth\UsersController@profile',
    'as' => 'profile',
]);

Route::post('profile', [
    'uses' => 'Auth\UsersController@profileEdit',
    'as' => 'profile.edit',
]);

Route::get('profile/order-details/{id}', [
    'uses' => 'Auth\UsersController@orderDetails',
    'as' => 'auth.order-details',
]);



// Carrito -------------


Route::get('cart/show', [
  'as' => 'cart-show',
  'uses' => 'CartController@show'
]);

Route::post('cart/add', [
  'as' => 'cart-add',
  'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}',[
  'as' => 'cart-delete',
  'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
  'as' => 'cart-trash',
  'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity}', [
  'as' => 'cart-update',
  'uses' => 'CartController@update'
]);

Route::get('order-detail', [
  'middleware' => 'auth',
  'as' => 'order-detail',
  'uses' => 'CartController@orderDetail'
]);

// // Paypal

// Enviamos nuestro pedido a PayPal
Route::get('payment', array(
  'as' => 'payment',
  'uses' => 'PaypalController@postPayment',
));

// // Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('payment/status', array(
  'as' => 'payment.status',
  'uses' => 'PaypalController@getPaymentStatus',
));