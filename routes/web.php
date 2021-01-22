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

//  Route::get('/', 'LessonController@index'); 


// Layout 1
Route::get('/basic', 'LessonController@basic'); 
Route::get('/inter', 'LessonController@inter'); 
Route::get('/advance', 'LessonController@advance'); 

// answe
Route::post('/answer-submit/{id}', 'LessonController@answerSubmit')->name("answer-submit"); 


// layout detail
// Route::get('/{id}', 'LessonController@show');    

// Admin 
Route::resource('/admin/post', 'AdminPostLessonCotroller');
// request 



Route::resource('/admin/question', 'AdminQuestionController');
Route::resource('/admin/dictionary', 'AdminDictionaryController');
Route::resource('/admin/vocabulary', 'AdminVocabularyController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
