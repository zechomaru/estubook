<?php

Route::get('/dashboard',[
    'uses' => 'DashboardController@index',
    'as' => 'dashboard',
]);

Route::resource('tiposdeacademia', 'TypeAcademiesController');
Route::resource('academias', 'AcademiesController');
Route::resource('modalidades', 'ModalitiesController');
Route::resource('carreras', 'CareersController');
Route::resource('libros', 'BooksController');
Route::resource('autores', 'AuthorsController');

Route::get('periodos', [
    'uses' => 'PeriodsController@index',
    'as' => 'periodos.index',
]);
Route::post('periodos/store', [
    'uses' => 'PeriodsController@store',
    'as' => 'periodos.store',
]);
Route::put('periodos/update', [
    'uses' => 'PeriodsController@update',
    'as' => 'periodos.update',
]);

Route::put('order-status', [
    'uses' => 'DashboardController@status',
    'as' => 'order-status.edit',
]);

Route::get('details-order/{id}', [
    'uses' => 'DashboardController@detailsOrder',
    'as' => 'details-order',
]);