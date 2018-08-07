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
Route::get('blog', 'CompanyProfile\BlogController@getList');
Route::get('blog/edit/{code}', 'CompanyProfile\BlogController@edit');
Route::post('blog/edit/submit', 'CompanyProfile\BlogController@update');
Route::post('blog/delete', 'CompanyProfile\BlogController@delete');
Route::post('blog/create', 'CompanyProfile\BlogController@store');
