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



Route::get('/', 'LessonController@index'); 

Route::get('/basic', 'LessonController@basic'); 
Route::get('/inter', 'LessonController@inter'); 
Route::get('/advance', 'LessonController@advance'); 


Route::get('/show/{id}', 'LessonController@show');
//Route::get('/inter/{id}', 'LessonController@show');
//Route::get('/advance/{id}', 'LessonController@show');


