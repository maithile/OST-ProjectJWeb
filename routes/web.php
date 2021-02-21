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

// Homepage;
// Route::get('/', 'LessonController@index')->name('welcome'); 
// Layout 1
Route::get('/basic', 'LessonController@basic')->name('basic'); 
Route::get('/inter', 'LessonController@inter')->name('inter'); 
Route::get('/advance', 'LessonController@advance')->name('inter'); 

// layout detail
Route::get('/show/{id}', 'LessonController@show')->name('show');

 // Search funtion
 Route::any('/search', 'LessonController@search')->name("search");

// layout Topics
Route::get('/displayCate/{id}', 'LessonController@displayCate')->name('displayCate');

// quetion and answer
Route::get('/question/{id}', 'LessonController@question')->name('question');

// Route::resurce('/comment', 'CommentsController');
Route::post('/loadComment', 'CommentsController@loadComment');
Route::post('/addComment', 'CommentsController@addComment');
Route::post('/replyComment', 'CommentsController@replyComment');

//for question 

// for Admin 
 Route::middleware('auth')->group(function(){

 Route::resource('/admin/post', 'AdminPostLessonCotroller')->middleware('admin');
 Route::resource('/admin/question', 'QuestionsController')->middleware('admin');
 Route::resource('/admin/category', 'CategoryController')->middleware('admin');
 Route::get('/logout', 'Auth\LoginController@logout');
});

Auth::routes();

//homepage
Route::get('/', 'HomeController@index')->name('home');





