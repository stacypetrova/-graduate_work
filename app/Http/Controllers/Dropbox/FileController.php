<?php

namespace App\Http\Controllers\Dropbox;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\NewFile;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
//    Список файлов для сутдента
    public function ListFileStudent()
    {
        $newfiles = NewFile::all();
//        dd($newfiles);
        return view('file.list_file_student', ['newfiles' => $newfiles]);
    }

//    Список файлов для преподавателя (с возможностью добавить новый файл, профиль преподавателя)
    public function ListFileTeacher()
    {
        return view('file.list_file_teacher');
    }

//    Список файлов преподавателя (без возможности добавить новый файл, профиль студента)
    public function ReviewListFileTeacher()
    {
        return view('file.review_list_file_teacher');
    }

//    Подробный просмотр файла для студента/преподавателя
    public function ReviewFile()
    {
        return view('file.review_file');
    }

//    Добавление нового файла преподавателем
    public function AddNewFile()
    {
        return view('file.add_file');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
