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
    return view('index');
});

Route::post('contact/submit', 'CompanyProfile\contactController@store');

//Blog News
Route::get('articles', 'CompanyProfile\BlogController@getList');
Route::get('articles/edit/{code}', 'CompanyProfile\BlogController@edit');
Route::post('articles/edit/submit', 'CompanyProfile\BlogController@update');
Route::post('articles/delete', 'CompanyProfile\BlogController@delete');
Route::post('articles/create', 'CompanyProfile\BlogController@store');
Route::get('messages/list','CompanyProfile\contactController@get_list');
















