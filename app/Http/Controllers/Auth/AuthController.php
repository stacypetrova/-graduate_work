<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Kurs;
use App\Models\Group;
use App\Models\Teacher;
use Validator;
use Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/';


    public function getLogin()
    {
        $kurs = Kurs::all();
        $group = Group::all();
        return view('auth.login', compact('kurs', 'group'));
    }

    public function getRegister()
    {
        $teacher = Teacher::all();
        return view('auth.register', compact('teacher'));
    }
    
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'user_type' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        if (Request::hasFile('avatar-2')) {
            $avatar = $data['avatar-2'];
            $weight = $avatar->getSize()/1024;
            $data['weight'] = round($weight, 0) . " " . "Кб";
            $data['name_file']= $avatar->getClientOriginalName();
            $pseudonym = Str::random(12).'_'.time(date_create(null));
            $data['pseudonym']= $pseudonym;
            $extension = $avatar->getClientOriginalExtension();
            $data['extension'] = $extension;
            $destinationPath = public_path('avatars');
            $data['path_to_file'] = $destinationPath;
            $avatar->move($destinationPath, $pseudonym . "." . $extension);
        }
        else {
            $data['name_file'] = 'default-avatar-profile';
            $data['extension'] = 'jpg';
            $data['weight'] = '4,61 КБ';
            $data['pseudonym'] = 'NoPseudonym';
            $data['path_to_file'] = '"E:\OpenServer\domains\-graduate_work1\storage\avatars\default-avatar-profile
            .jpg"';
        }

        if($data['user_type'] == 'student'){
            $user_data = [ 'user_type' =>  $data['user_type'],
                'name' => $data['name'],
                'kurs_id' => $data['kurs'],
                'group_id' => $data['group'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'name_file' => $data['name_file'],
                'extension' => $data['extension'],
                'weight' => $data['weight'],
                'pseudonym' => $data['pseudonym'],
                'path_to_file' => $data['path_to_file'],
            ];
        } else{
            $user_data = [ 'user_type' =>  $data['user_type'],
                'name' => $data['name'],
                'teacher_id' => $data['teacher'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'name_file' => $data['name_file'],
                'extension' => $data['extension'],
                'weight' => $data['weight'],
                'pseudonym' => $data['pseudonym'],
                'path_to_file' => $data['path_to_file'],
            ];
        }

        $new_user = User::create($user_data);
        return $new_user;
    }
}
