<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','HomeController@showWelcome');

Route::group(['prefix'=>'api/v1'],function(){
    Route::post('questions','QuestionController@create');
    Route::post('questions/{id}/options','OptionsController@create');
    Route::get('questions','QuestionController@index');
    Route::get('questions/{id}','QuestionController@show');
    Route::get('questions/{id}/options','OptionsController@question');
    Route::put('questions/{id}','QuestionController@update');
    Route::put('options/{id}','OptionsController@update');
    Route::post('questions/{id}/answers','AnswerController@create');
    Route::get('questions/{id}/answers','AnswerController@show');
});