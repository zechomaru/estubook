<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
Route::get('/search/{query}', 'Api\SearchController@index');
Route::get('/academy/career/periods', 'Api\PeriodsController@index');
Route::get('/academy/career/periods/books', 'Api\BooksController@index');
Route::get('/academy/career/periods/bookss', 'Api\BooksController@indexBooks');

// admin
Route::get('/admin/books', 'Api\AdminController@books');
Route::post('/admin/add/books', 'Api\AdminController@addBooks');