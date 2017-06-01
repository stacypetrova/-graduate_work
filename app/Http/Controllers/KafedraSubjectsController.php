<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Teacher;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class KafedraSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//    Список предметов
    public function ListSubjectsKafedra()
    {
        $subjects = Subject::all();
        return view('kafedra_subjects.kafedra_subjects', ['subjects' => $subjects]);
    }

//    Список преподавателей по предметам
    public function KafedraSubjectsMore($id)
    {
        $teachers = Teacher::with(['groups','groups.kurs','user'])->whereHas('subjects',function ($q) use ($id){
            $q->where('subject_id', $id);
        })->get();
        foreach($teachers as $teacher){
            $kurs_group = [];
            foreach($teacher->groups as $group){
                if( !array_key_exists($group->kurs->name, $kurs_group)){
                    $kurs_group[$group->kurs->name] = null;
                }
                $kurs_group[$group->kurs->name][$group->name] = $group;
            }
            $teacher->kurs_group = $kurs_group;
        }
        return view('kafedra_subjects.kafedra_subjects_more', ['teachers' => $teachers]);
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
