<?php
/**
 * Created by PhpStorm.
 * User: User PC
 * Date: 30.04.2017
 * Time: 15:51
 */
namespace  App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;

use App\Models\Kurs;
use App\Models\Group;

class UserController extends Controller
{
    public function getRegisterTeacher()
    {
        $user_teacher = User::all();
        return view('auth.register', ['users' => $user_teacher]);
    }

    public function postRegisterTeacher(Request $request)
    {
        $user_teacher = new User();
        $user_teacher->type = '1';
        $user_teacher->name = $request['name'];
        $user_teacher->post = $request['post'];
        $user_teacher->email = $request['email'];
        $user_teacher->password = bcrypt($request['password']);

        if ($request->hasFile('avatar-2')) {
            $avatar = $request->file('avatar-2');
            $weight = $avatar->getSize()/1024;
            $user_teacher->weight = round($weight, 0) . " " . "Кб";
            $user_teacher->name_file= $avatar->getClientOriginalName();
            $pseudonym = Str::random(12).'_'.time(date_create(null));
            $user_teacher->pseudonym= $pseudonym;
            $extension = $avatar->getClientOriginalExtension();
            $user_teacher->extension = $extension;
            $destinationPath = storage_path('avatars');
            $user_teacher->path_to_file = $destinationPath;
            $avatar->move($destinationPath, $pseudonym . "." . $extension);
        }
        else {
            $user_teacher->name_file = 'default-avatar-profile';
            $user_teacher->extension = 'jpg';
            $user_teacher->weight = '4,61 КБ';
            $user_teacher->pseudonym = 'NoPseudonym';
            $user_teacher->path_to_file = '"E:\OpenServer\domains\-graduate_work1\storage\avatars\default-avatar-profile.jpg"';
        }
        $user_teacher->save();
        return redirect()->back();
    }

    public function getRegisterStudent()
    {
        $kurs = Kurs::all()->groupBy('degree');
        $group = Group::all();
        return view('auth.register_student', compact('kurs', 'group'));
    }

    public function postRegisterStudent(Request $request)
    {
        $user_student = new User();
        $user_student->type = '2';
        $user_student->name = $request['name'];
        $user_student->kurs = $request['kurs'];
        $user_student->group = $request['group'];
        $user_student->email = $request['email'];
        $user_student->password = bcrypt($request['password']);

        if ($request->hasFile('avatar')) {
            $avatar_stud = $request->file('avatar');
            $weight = $avatar_stud->getSize()/1024;
            $user_student->weight = round($weight, 0) . " " . "Кб";
            $user_student->name_file= $avatar_stud->getClientOriginalName();
            $pseudonym = Str::random(12).'_'.time(date_create(null));
            $user_student->pseudonym= $pseudonym;
            $extension = $avatar_stud->getClientOriginalExtension();
            $user_student->extension = $extension;
            $destinationPath = storage_path('avatars');
            $user_student->path_to_file = $destinationPath;
            $avatar_stud->move($destinationPath, $pseudonym . "." . $extension);
        }
        else {
            $user_student->name_file = 'default-avatar-profile';
            $user_student->extension = 'jpg';
            $user_student->weight = '4,61 КБ';
            $user_student->pseudonym = 'NoPseudonym';
            $user_student->path_to_file = '"E:\OpenServer\domains\-graduate_work1\storage\avatars\default-avatar-profile.jpg"';
        }
        dd($user_student);
        $user_student->save();
        return redirect()->back();
    }
}