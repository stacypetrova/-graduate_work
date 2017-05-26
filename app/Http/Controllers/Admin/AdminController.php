<?php
/**
 * Created by PhpStorm.
 * User: User PC
 * Date: 30.04.2017
 * Time: 15:51
 */
namespace  App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;

use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Group;
use App\Models\Kurs;

use Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        if(Auth::user()->id != 1){
            dd('ухадите');
        }
    }


    //Создание преподов
    public function getRegisterTeacher()
    {
        $teachers = Teacher::all();
        return view('admin.content.create_teacher', ['teachers' => $teachers]);
    }

    public function postRegisterTeacher(Request $request)
    {
        $user_teacher = new Teacher();
        $user_teacher->name = $request->fio_teacher;
        $user_teacher->post = $request->post_teacher;
        $user_teacher->save();
        return redirect()->route('admin.teachers');
    }


    //Создание предметов
    public function getRegisterSubject()
    {
        $subjects = Subject::all();
        return view('admin.content.create_subject', ['subjects' => $subjects]);
    }

    public function postRegisterSubject(Request $request)
    {
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->save();
        return redirect()->route('admin.subject');
    }


    //Создание групп
    public function getRegisterGroup()
    {
        $kurs = Kurs::all()->groupBy('degree');
        $groups = Group::all();
        return view('admin.content.create_group', ['groups' => $groups, 'kurs' => $kurs]);
    }
    public function postRegisterGroup(Request $request)
    {
        $group = new Group();
        $group->name = $request->name;
        $group->kurs_id = $request->kurs_id;
        $group->save();
        return redirect()->route('admin.group');
    }


    //связываем препода
    public function syncTeacherAndSubject($teacher_id)
    {
        $teacher = Teacher::with('subjects')->find($teacher_id);
        $subjects = Subject::all();
        $groups = Group::all();
        return view('admin.content.sync_teacher', ['teacher' => $teacher, 'subjects' => $subjects, 'groups' => $groups]);
    }
    //с предметом
    public function createSyncTeacherAndSubject($teacher_id, Request $request)
    {
        $teacher = Teacher::with('subjects')->find($teacher_id);
        if(! $teacher->subjects()->where('subject_id', '=', $request->input('subject_id'))->first()){
            $teacher->subjects()->attach($request->input('subject_id'));
        }
        return redirect()->route('admin.sync_teacher', ['id'=>$teacher_id]);
    }
    //с группой
    public function createSyncTeacherAndGroup($teacher_id, Request $request)
    {
        $teacher = Teacher::with('groups')->find($teacher_id);
        if(! $teacher->groups()->where('group_id', '=', $request->input('group_id'))->first()){
            $teacher->groups()->attach($request->input('group_id'));
        }
        return redirect()->route('admin.sync_teacher', ['id'=>$teacher_id]);
    }


    public function syncGroupAndSubject()
    {
        $teachers = Teacher::all();
        return view('admin.content.create_teacher', ['teachers' => $teachers]);
    }


}