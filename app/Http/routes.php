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
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Регистрация преподавателя/студента
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/register_student', ['as' => 'auth_student_register', 'uses' => 'UserController@getRegisterStudent']);
Route::post('auth/register_student', ['as' => 'auth_student_register', 'uses' => 'Auth\AuthController@postRegister']);

Route::group(['middleware' => 'auth'], function(){
    // Профиль студента и его пути
    Route::get('/', ['as' => 'profile', 'uses' => 'ProfileController@profile']);



    // Скачиваем файл
    Route::get('download/{alias}', ['as' => 'download_file', 'uses' => 'Dropbox\FileController@DownloadFile']);

    // Удаляем файл из таблицы
    Route::get('delete/{id}', ['as' => 'delete_file', 'uses' => 'Dropbox\FileController@destroy']) ;

    // Профиль преподавателя и его пути (с возможностью добавления новых файлов, профиль преподавателя)

    // Форма для добавления нового файла преподавателем
    Route::get('add_file', ['as' => 'file.create', 'uses' => 'Dropbox\FileController@index']);
    Route::post('add_file', ['as' => 'file.create', 'uses' => 'Dropbox\FileController@create']);

    // Просмотр файла подробнее
    Route::get('dropbox/review_file', ['as' => 'review_file', 'uses' => 'Dropbox\FileController@ReviewFile']);


    Route::get('dropbox/{type}/{subject_id}', ['as' => 'dropbox', 'uses' => 'Dropbox\FileController@ListFile']);
    // Просмотр списка преподавателей на кафедре
    Route::get('/list_teachers', ['as' => 'list_teachers', 'uses' => 'ListTeacherController@ListTeacher']);

    // Просмотр всей скинутых фалов преподавателя (без возможность добавления новых, профиль студента)
    Route::get('/list_teacher_file', ['as' => 'list_teacher_files', 'uses' =>
        'Dropbox\FileController@ReviewListFileTeacher']);

    // Просмотр списка предметов на кафедре
    Route::get('/list_subjects', ['as' => 'list_subjects', 'uses' => 'KafedraSubjectsController@ListSubjectsKafedra']);

    // Просмотр преподавателей по предмету
    Route::get('/subject_more', ['as' => 'subjects_more', 'uses' => 'KafedraSubjectsController@KafedraSubjectsMore']);


    Route::group(['prefix' => 'admin'], function(){
        Route::get('/', ['as' => 'admin.teachers', 'uses' => 'Admin\AdminController@getRegisterTeacher']);
        Route::post('/teacher', ['as' => 'admin.create_teacher', 'uses' => 'Admin\AdminController@postRegisterTeacher']);

        Route::get('/subjects', ['as' => 'admin.subjects', 'uses' => 'Admin\AdminController@getRegisterSubject']);
        Route::post('/subject', ['as' => 'admin.create_subject', 'uses' =>
            'Admin\AdminController@postRegisterSubject']);

        Route::get('/group', ['as' => 'admin.group', 'uses' => 'Admin\AdminController@getRegisterGroup']);
        Route::post('/group', ['as' => 'admin.create_group', 'uses' =>
            'Admin\AdminController@postRegisterGroup']);

        Route::get('/sync_teacher_and_subject/{id}', ['as' => 'admin.sync_teacher', 'uses' =>
            'Admin\AdminController@syncTeacherAndSubject']);
        Route::post('/sync_teacher_and_subject/{id}', ['as' => 'admin.create_sync_teacher_and_subjects',
            'uses' => 'Admin\AdminController@createSyncTeacherAndSubject']);
        Route::post('/sync_teacher_and_groups/{id}', ['as' => 'admin.create_sync_teacher_and_groups',
            'uses' => 'Admin\AdminController@createSyncTeacherAndGroup']);

        Route::get('/sync_group_and_subject/{id}', ['as' => 'admin.sync_group', 'uses' =>
            'Admin\AdminController@syncGroupAndSubject']);
        Route::post('/sync_group_and_subject/{id}', ['as' => 'admin.sync_group_and_subject',
            'uses' => 'Admin\AdminController@createSyncGroupAndSubject']);
    });
});
