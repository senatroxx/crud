<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('index');

Route::prefix('quiz')->group(function () {
  Route::get('create', 'QuizController@create')->name('quiz.create');
  Route::post('store', 'QuizController@store')->name('quiz.store');
  Route::get('show/{id}', 'QuizController@show')->name('quiz.show');
  Route::get('edit/{id}', 'QuizController@edit')->name('quiz.edit');
  Route::put('update/{id}', 'QuizController@update')->name('quiz.update');
  Route::delete('delete/{id}', 'QuizController@destroy')->name('quiz.destroy');
});

Route::prefix('text')->group(function (){
  Route::get('create', 'TextController@create')->name('text.create');
  Route::post('store', 'TextController@store')->name('text.store');
  Route::get('show/{id}', 'TextController@show')->name('text.show');
  Route::get('edit/{id}', 'TextController@edit')->name('text.edit');
  Route::put('update/{id}', 'TextController@update')->name('text.update');
  Route::delete('delete/{id}', 'TextController@destroy')->name('text.destroy');
});