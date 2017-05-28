<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//    Вьюхи профилей
    public function profile()
    {
        $user = User::with(['group','group.teachers','group.subjects','teacher','teacher.subjects'])->find(Auth::user()->id);
        if($user->group){
            $group_subjects_id = $user->group->subjects->lists('id');
            $user->group->teachers->load(['subjects'=>function($q) use ($group_subjects_id){
                $q->whereIn('subject_id', $group_subjects_id);
            }]);
        }

        return view('profile.index', ['user'=>$user]);
    }

}
