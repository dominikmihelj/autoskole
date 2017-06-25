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

Route::get('/schools/{school}/instructors/{instructor}', 'InstructorController@index');
Route::get('/schools/{school}/create', 'InstructorController@show');
Route::post('/schools/{school}/create', 'InstructorController@create');
Route::post('/schools/{school}/instructors/{instructor}', 'InstructorController@store');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');