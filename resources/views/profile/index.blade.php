@extends('layouts.app')

@section('title')
    Профиль студента
@stop

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/style_content.css">

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-info myPanel">
                        <div class="panel-body">
                            <div class="profile">
                                <div class="profile_logo">
                                    <img src="{{'/avatars/'.Auth::user()->pseudonym.'.'.Auth::user()->extension}}" alt="Фотография моего профиля" class="img-circle img-responsive center-block">
                                </div>
                                <h3>{{Auth::user()->name}}</h3>
                                @if(Auth::user()->user_type == 'student')
                                    <p><strong>Курс: </strong>{{Auth::user()->group->kurs->name}}</p>
                                    <p><strong>Группа: </strong>{{Auth::user()->group->name}}</p>
                                    <p><strong>Количество предметов на кафедре: </strong> 7</p>
                                @else
                                    <p><strong>Должность: </strong>{{Auth::user()->teacher->post}}</p>
                                    <p><strong>Количество предметов: </strong> 7</p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    @if(Auth::user()->user_type == 'student')
                        <h3>Все предметы</h3>
                        <div class="row">
                            @foreach($user->group->teachers as $teacher)
                                @foreach($teacher->subjects as $subject)
                                    <div class="col-md-3 subject_box">
                                        <a href="{{route('dropbox', ['type' => Auth::user()->user_type])}}">
                                            <button type="button" class="btn btn-primary btn_list">
                                                <p>{{$subject->name}}</p></button>
                                        </a>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    @else

                        <h3>Предметы</h3>
                        <div class="row">

                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

@stop