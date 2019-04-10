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

//Route::resource('employees','EmployeeController');
//Route::get('/documents','DocumentController@form')->name('documents.form');
//Route::post('/parse','DocumentController@parse')->name('parse.parse');
//Route::post('/replace','DocumentController@replace')->name('replace.replace');
Route::resource('files','FileController');
//Route::get('/','ControllerCSV@index');
//Route::post('/form', 'ControllerCSV@store');

/*Route::get('/', 'PagesController@home');

Route::get('/inscription',function() {
	return view('inscription');
});

Route::post('/inscription',function(){
	return "inscription envoyé" ;
});*/