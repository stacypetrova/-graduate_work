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

// Аутентификация пользователя
Route::get('auth/login', ['as' => 'auth_login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', ['as' => 'auth_register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', ['as' => 'auth_register', 'uses' => 'Auth\AuthController@getRegister']);

Route::get('auth/register_student', ['as' => 'student_register', 'uses' => 'Auth\AuthController@getRegisterStudent']);
Route::post('auth/register_student', ['as' => 'student_register', 'uses' => 'Auth\AuthController@getRegisterStudent']);


// Профиль студента и его пути
Route::get('/', ['as' => 'profile_student', 'uses' => 'ProfileController@profileStudent']);
Route::get('dropbox/student', ['as' => 'dropbox_student', 'uses' => 'Dropbox\FileController@ListFileStudent']);

// Профиль преподавателя и его пути (с возможностью добавления новых файлоы, профиль преподавателя)
Route::get('/teacher', ['as' => 'profile_teacher', 'uses' => 'ProfileController@profileTeacher']);
Route::get('dropbox/teacher', ['as' => 'dropbox_teacher', 'uses' => 'Dropbox\FileController@ListFileTeacher']);

// Форма для добавления нового файла преподавателем
Route::get('/new_file', ['as' => 'add_file', 'uses' => 'Dropbox\FileController@AddNewFile']);

// Просмотр файла подробнее
Route::get('dropbox/review_file', ['as' => 'review_file', 'uses' => 'Dropbox\FileController@ReviewFile']);

// Просмотр списка преподавателей на кафедре
Route::get('/list_teachers', ['as' => 'list_teachers', 'uses' => 'ListTeacherController@ListTeacher']);

// Просмотр всей скинутых фалов преподавателя (без возможность добавления новых, профиль студента)
Route::get('/list_teacher_file', ['as' => 'list_teacher_files', 'uses' =>
    'Dropbox\FileController@ReviewListFileTeacher']);

// Просмотр списка предметов на кафедре
Route::get('/list_subjects', ['as' => 'list_subjects', 'uses' => 'KafedraSubjectsController@ListSubjectsKafedra']);

// Просмотр преподавателей по предмету
Route::get('/subject_more', ['as' => 'subjects_more', 'uses' => 'KafedraSubjectsController@KafedraSubjectsMore']);
