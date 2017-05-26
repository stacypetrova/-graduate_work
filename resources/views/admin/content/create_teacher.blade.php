@extends('admin.layouts.app')

@section('title')
    Профиль студента
@stop

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/style_content.css">

    <div class="content">
        <div class="container">

            <form class="form-horizontal" role="form" method="post" action="{{ route('admin.create_teacher') }}">
                {!! csrf_field() !!}
                <input type="text" name="fio_teacher">
                <input type="text" name="post_teacher">
                <button>Зарегестрировать</button>
            </form>
            <div class="row">
                <h3>Все преподаватели</h3>
                <table>
                    <thead>
                    <tr>
                        <td>
                            Ф.И.О преподавателя
                        </td>
                        <td>
                            Должность
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>
                                <a href="{{route('admin.sync_teacher', ['id'=>$teacher->id])}}">{{$teacher->name}}</a>
                            </td>
                            <td>
                                {{$teacher->post}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop