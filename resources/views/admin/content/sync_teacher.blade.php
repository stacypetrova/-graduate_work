@extends('admin.layouts.app')

@section('title')
    Профиль студента
@stop

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/style_content.css">

    <div class="content">
        <div class="container">





            <div class="row">
                <h2>{{$teacher->name}}</h2>
                <div class="col-md-6">
                    <h3>Предметы которые ведет преподаватель</h3>
                    <form class="form-horizontal" role="form" method="post" action="{{ route('admin.create_sync_teacher_and_subjects', ['id' => $teacher->id]) }}">
                        {!! csrf_field() !!}
                        <select type="text" name="subject_id">
                            @foreach($subjects->toArray() as $key=>$sub_value)
                                <option value="{{$sub_value['id']}}">{{$sub_value['name']}}</option>
                            @endforeach
                        </select>
                        <button>Добавить</button>
                    </form>
                    <table>
                        <thead>
                        <tr>
                            <td>
                                Наименование предмета
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teacher->subjects as $subject)
                            <tr>
                                <td>
                                    {{$subject->name}}
                                </td>
                                <td>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h3>Группы в которых ведет преподаватель</h3>
                    <form class="form-horizontal" role="form" method="post" action="{{ route('admin.create_sync_teacher_and_groups', ['id' => $teacher->id]) }}">
                        {!! csrf_field() !!}
                        <select type="text" name="group_id">
                            @foreach($groups->toArray() as $key=>$sub_value)
                                <option value="{{$sub_value['id']}}">{{$sub_value['name']}}</option>
                            @endforeach
                        </select>
                        <button>Добавить</button>
                    </form>
                    <table>
                        <thead>
                        <tr>
                            <td>
                                Наименование группы
                            </td>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teacher->groups as $subject)
                            <tr>
                                <td>
                                    {{$subject->name}}
                                </td>
                                <td>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@stop