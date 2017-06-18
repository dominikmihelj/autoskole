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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/schools', 'SchoolController@index');
Route::get('/schools/{schoolId}', 'SchoolController@show');
Route::post('/schools/{schoolId}', 'SchoolController@store');

Route::get('/schools/{schoolId}/instructors', 'InstructorController@index');
Route::get('/schools/{schoolId}/instructors/{instructorId}', 'InstructorController@show');
Route::post('/schools/{schoolId}/instructors/{instructorId}', 'InstructorController@store');
