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
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index');

Route::post('/schools', 'SchoolController@index');
Route::get('/schools/{school}', 'SchoolController@show');
Route::post('/schools/{school}', 'SchoolController@store');

Route::post('/schools/{school}/instructors', 'InstructorController@create');
Route::get('/schools/{school}/instructors/{instructor}', 'InstructorController@index');
Route::post('/schools/{school}/instructors/{instructor}', 'InstructorController@store');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');
