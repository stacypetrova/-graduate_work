@extends('admin.layouts.app')

@section('title')
    Профиль студента
@stop

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/style_content.css">

    <div class="content">
        <div class="container">

            <form class="form-horizontal" role="form" method="post" action="{{ route('admin.create_subject') }}">
                {!! csrf_field() !!}
                <input type="text" name="name">
                <button>Зарегестрировать</button>
            </form>
            <div class="row">
                <h3>Все предметы</h3>
                <table>
                    <thead>
                    <tr>
                        <td>
                            Наименование предмета
                        </td>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subjects as $subject)
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

@stop