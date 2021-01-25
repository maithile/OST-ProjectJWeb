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

//  

// Layout 1
Route::get('/basic', 'LessonController@basic')->name('basic'); 
Route::get('/inter', 'LessonController@inter')->name('inter'); 
Route::get('/advance', 'LessonController@advance')->name('inter'); 

// answe
Route::post('/answer-submit/{id}', 'LessonController@answerSubmit')->name("answer-submit"); 


// layout detail
// Route::get('/{id}', 'LessonController@show');    

Route::middleware('auth')->group(function(){
    //All Routes which needs user to be logged in
    });

// Admin 
Route::middleware('auth')->group(function(){

 Route::resource('/admin/post', 'AdminPostLessonCotroller')->middleware('admin');
 Route::resource('/admin/dictionary', 'AdminDictionaryController')->middleware('admin');

});


// Route::resource('/admin/question', 'AdminQuestionController');
// Route::resource('/admin/vocabulary', 'AdminVocabularyController');


Route::get('/', 'LessonController@index')->name('welcome'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('thoat', function(){
    Auth::logout();
    return redirect()->route('/');
});


