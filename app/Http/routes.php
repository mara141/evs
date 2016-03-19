<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| post,get,put,delete
 */
Route::get('index', 'FrontController@index');

Route::get('/', 'FrontController@index');
Route::resource('image-uploads', 'ImagesController@saveImages');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');
$router->get('import', 'ImportController@import');
$router->get('import1', 'ImportVotantesController@import');
$router->get('ImportarVotan', 'ImportVotantesController@index');
Route::resource('file', 'FileController');
route::controller('imagenes', 'ImagesController');

Route::resource('votar', 'VotarController');
Route::resource('votos', 'VotosController');
Route::resource('mail', 'MailController');
Route::resource('indimail', 'IndiMailController');
Route::resource('usuario', 'UsuarioController');
Route::resource('log', 'LogController');
Route::resource('institucion', 'InstController');
Route::resource('eleccion', 'EleccionController');
Route::resource('votan', 'VotantesController');

Route::resource('indieleccion', 'IndiEleccionController');
Route::resource('indivotan', 'IndivotanController');
Route::resource('indivotar', 'IndiVotarController');
