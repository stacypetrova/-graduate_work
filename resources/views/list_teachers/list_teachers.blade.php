@extends('layouts.app')

@section('title')
    Преподаватели
@stop

@section('content')
    <!-- Последние CSS -->
    <link rel="stylesheet" type="text/css" href="/css/list_teachers.css">

    <div class="content">
        <div class="container">
            <div class="row">
                @foreach($teachers as $teacher)
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="/images/foto.png" alt="Фамилия Имя Отчество">
                        <div class="caption">
                            <div class="FIO">
                                <h3>{{$teacher->name}}</h3>
                            </div>
                            <div class="position">
                                <p>{{$teacher->post}}</p>
                            </div>
                            <div class="More">
                                <a href="{{route('list_teacher_files', ['teacher_id' => $teacher->id])}}" class="btn btn-primary btn-popov" role="button">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>


    <!-- jQuery (необходим для JavaScript плагинов Bootstrap) -->
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>

@stop