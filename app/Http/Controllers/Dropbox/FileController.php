<?php

namespace App\Http\Controllers\Dropbox;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\NewFile;
use Illuminate\Support\Str;


class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
//    Список файлов для сутдента
//    Список файлов для преподавателя (с возможностью добавить новый файл, профиль преподавателя)

    public function ListFile()
    {
        $newfiles = NewFile::all();

        return view('file.list_file', ['newfiles' => $newfiles]);
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

    public function index()
    {
        return view('file.add_file');
    }

    //  Добавление нового файла преподавателем
    public function create(Request $request)
    {
        // Валидация
        
        $addfile = new NewFile();
        $addfile->title_file = $request['title_file'];
        $addfile->kurs = $request['kurs'];
        $addfile->group = $request['group'];
        $addfile->subject = $request['subject'];
        $addfile->subject = $request['subject'];
        $addfile->description = $request['description'];

        $file = $request->file('input_file');
        $weight = $file->getSize()/1024;
        $addfile->weight = round($weight, 0) . " " . "Кб";
        $addfile->name_file= $file->getClientOriginalName();
//        $pseudonym = $file->getClientOriginalName().'_'.time(date_create(null));
        $pseudonym = Str::random(12).'_'.time(date_create(null));
        $addfile->pseudonym= $pseudonym;
        $extension = $file->getClientOriginalExtension();
        $addfile->extension = $extension;
        $destinationPath = storage_path('files');
        $addfile->path_to_file = $destinationPath;
//        dd($destinationPath);
        $file->move($destinationPath, $pseudonym . "." . $extension);
        $addfile->save();
//        dd('Сохранено');
//        dd($request);
        return redirect()->route('dropbox_student');
    }

    //    Скачиваем файл
    public function DownloadFile($alias)
    {
        $file = NewFile::where("pseudonym", "=", $alias)->first();
        // dd($file->path_to_file, $file->pseudonym, $file->extension);
        $path_to_file = $file->path_to_file;
        $pseudonym = $file->pseudonym;
        $extension = $file->extension;
        $path_to_download = $path_to_file . "\\" . $pseudonym . "." . $extension;
    //  dd($path_to_download);
        return response()->download($path_to_download);
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
    //  Удаление файла из таблицы с файлами
    public function destroy($id)
    {
        DB::delete('delete from newfiles where id = ?', [$id]);
        return redirect()->route('dropbox_student');
    }
}
