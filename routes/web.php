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

// Homepage
// Route::get('/', 'LessonController@index')->name('welcome'); 

  // for users
// Layout 1
Route::get('/basic', 'LessonController@basic')->name('basic'); 
Route::get('/inter', 'LessonController@inter')->name('inter'); 
Route::get('/advance', 'LessonController@advance')->name('inter'); 

// layout detail
Route::get('/show/{id}', 'LessonController@show')->name('show');

// answer
Route::post('/answer-submit/{id}', 'LessonController@answerSubmit')->name("answer-submit");

 Route::get('/comment/{id}', 'LessonController@answerSubmit')->name("comment");

// for Admin 
 Route::middleware('auth')->group(function(){

 Route::resource('/admin/post', 'AdminPostLessonCotroller')->middleware('admin');
 Route::resource('/admin/dictionary', 'AdminDictionaryController')->middleware('admin');
 Route::get('/logout', 'Auth\LoginController@logout');

});

 Route::middleware('auth')->group(function(){
 Route::resource('/admin/post', 'AdminPostLessonCotroller')->middleware('admin');
 Route::resource('/admin/dictionary', 'AdminDictionaryController')->middleware('admin');
 Route::get('/logout', 'Auth\LoginController@logout');
 
 });
Auth::routes();

//homepage
Route::get('/home', 'HomeController@index')->name('home');





