<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Профиль студента и его пути
Route::get('/', 'ProfileController@profileStudent');
Route::get('dropbox/student', 'Dropbox\FileController@ListFileStudent');

// Профиль преподавателя и его пути
Route::get('/teacher', 'ProfileController@profileTeacher');
Route::get('dropbox/teacher', 'Dropbox\FileController@ListFileTeacher');

// Просмотр файла подробнее
Route::get('dropbox/review_file', 'Dropbox\FileController@ReviewFile');

// Просмотр списка преподавателей на кафедре
Route::get('/list_teachers', 'ListTeacherController@ListTeacher');

// Просмотр списка предметов на кафедре
Route::get('/list_subjects', 'KafedraSubjectsController@ListSubjectsKafedra');

// Просмотр преподавателей по предмету
Route::get('/subject_more', 'KafedraSubjectsController@KafedraSubjectsMore');

//Route::get('/', function () {
//    return view('welcome');
//});
