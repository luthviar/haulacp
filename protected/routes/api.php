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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('blog', 'CompanyProfile\BlogController@getList');
Route::get('blog-gen', 'CompanyProfile\BlogController@getList2');
Route::get('blog/edit/{code}', 'CompanyProfile\BlogController@edit');
Route::post('blog/edit/submit', 'CompanyProfile\BlogController@update');
Route::post('blog/delete', 'CompanyProfile\BlogController@delete');
Route::post('blog/create', 'CompanyProfile\BlogController@store');
