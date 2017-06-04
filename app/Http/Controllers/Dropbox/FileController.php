<?php

namespace App\Http\Controllers\Dropbox;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\NewFile;
use Illuminate\Support\Str;
use App\Models\Kurs;
use App\Models\Group;
use App\Models\User;
use Auth;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
//    Список файлов для сутдента
//    Список файлов для преподавателя (с возможностью добавить новый файл, профиль преподавателя)

    public function ListFile($type, $subject_id,  Request $request)
    {
        if($type === 'teacher' && Auth::user()->user_type === 'teacher'){
            $allfiles = NewFile::where('subject_id', $subject_id)->get();

            $sort_files = NewFile::where('subject_id',$subject_id)->get();
        } else{
            $kurs_id = Auth::user()->kurs_id;
            if($request->kurs_id){
                $kurs_id = $request->kurs_id;
            }
            $group_id = Auth::user()->group_id;
            if($request->group_id){
                $group_id = $request->group_id;
            }
            $allfiles = NewFile::where('kurs_id', Auth::user()->kurs_id)->where('group_id', Auth::user()->group_id)->where('subject_id', $subject_id)->get();

            $sort_files = NewFile::where('kurs_id', $kurs_id)->where('group_id',$group_id)->where('subject_id',$subject_id)->get();
        }

        return view('file.list_file', ['allfiles' => $allfiles, 'sort_files' => $sort_files]);
    }

    

//    Список файлов преподавателя (без возможности добавить новый файл, профиль студента)
    public function ReviewListFileTeacher($teacher_id)
    {
        $allfiles = NewFile::where('teacher_id', $teacher_id)->get();

        $sort_files = NewFile::where('teacher_id',$teacher_id)->get();
        return view('file.list_file', ['allfiles' => $allfiles, 'sort_files' => $sort_files]);
    }

//    Подробный просмотр файла для студента/преподавателя
    public function ReviewFile($id)
    {
        $redirect_back  = \URL::previous();
        if($redirect_back){

        }
        $newFile = NewFile::with(['teacher', 'subject', 'kurs', 'group'])->findOrFail($id);

        return view('file.review_file', [
            'file' => $newFile,
            'redirect_back' => $redirect_back
        ]);
    }

    public function index()
    {
        $user = User::with(['teacher', 'teacher.groups', 'teacher.groups.kurs'])->find(Auth::user()->id);
//        $kurs = Auth::user()->teacher->groups->kurs;
        $groups = $user->teacher->groups;
        return view('file.add_file', ['groups'=>$groups,'user'=>$user]);
    }

    //  Добавление нового файла преподавателем
    public function create(Request $request)
    {
        // Валидация
        
        $addfile = new NewFile();
        $addfile->title_file = $request['title_file'];
        $addfile->kurs_id = $request['kurs'];
        $addfile->group_id = $request['group'];
        $addfile->subject_id = $request['subject'];
        $addfile->teacher_id = Auth::user()->teacher_id;
        $addfile->description = $request['description'];
        $file = $request->file('input_file');

        $weight = $file->getSize()/1024;
        $addfile->weight = round($weight, 0) . " " . "Кб";
        $addfile->name_file= $file->getClientOriginalName();

        $pseudonym = Str::random(12).'_'.time(date_create(null));
        $addfile->pseudonym= $pseudonym;
        $extension = $file->getClientOriginalExtension();
        $addfile->extension = $extension;
        $destinationPath = storage_path('files');
        $addfile->path_to_file = $destinationPath;

        $file->move($destinationPath, $pseudonym . "." . $extension);
        $addfile->save();

        return redirect()->route('list_teacher_files', ['teacher_id'=>Auth::user()->teacher_id]);
    }

    //    Скачиваем файл
    public function DownloadFile($alias)
    {
        $file = NewFile::where("pseudonym", "=", $alias)->first();

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
