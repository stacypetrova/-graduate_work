@extends('admin.layouts.app')

@section('title')
    Профиль студента
@stop

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/style_content.css">

    <div class="content">
        <div class="container">
            <div class="row">
                <h2>Группа</h2>
                <div class="col-md-12">
                    <h3>Предметы которые ведут в этой группу</h3>
                    <form class="form-horizontal" role="form" method="post" action="{{ route('admin.sync_group_and_subject', ['id' => $group->id]) }}">
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
                        @foreach($group->subjects as $subject)
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