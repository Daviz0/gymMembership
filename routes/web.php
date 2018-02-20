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

// Create a Member 
Route::get('/person/create','PeopleController@create');
Route::get('/person/success','PeopleController@success');
Route::get('/person/viewall','PeopleController@view');
Route::post('/people','PeopleController@store');
Route::patch('people/{person}','PeopleController@update');
Route::post('/download','PeopleController@download');
Route::get('/person/{person}','PeopleController@amend');
Route::get('/report/setup','ReportController@reportSetup');	
Route::get('/report/result','ReportController@reportResult');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
