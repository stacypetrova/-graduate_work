@extends('layouts.app')

@section('title')
    Просмотр информации о файле
@stop

@section('content')
    <!--Последние CSS-->
    <link rel="stylesheet" type="text/css" href="/css/review_file.css">

    <!--Внутренности-->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 review_table">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <td class="stolbec_width">Наименовапние файла</td>
                                <td>{{$file->name_file}}</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Наименование предмета</td>
                                <td>{{$file->subject->name}}</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Преподаватель</td>
                                <td>{{$file->teacher->name}}</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Курс</td>
                                <td>{{$file->kurs->name}}</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Группа</td>
                                <td>{{$file->group->name}}</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Добавлено</td>
                                <td>{{$file->created_at}}</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Расширение файла</td>
                                <td>{{$file->extension}}</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Описание</td>
                                <td>
                                    {{$file->description}}
                                </td>
                            </tr>
                        </table>
                        <div class="btn_nazad">
                            <a class="btn btn-primary" href="{{ $redirect_back }}" role="button">Назад</a>
                            <button type="button" class="btn btn-success download">
                                <a href="{{ route('download_file', ['alias' => $file->pseudonym]) }}">
                                    <span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true">
                                    </span>
                                    Скачать
                            </a></button>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img class="img-thumbnail" src="{{'/avatars/'.$file->teacher->user->pseudonym.'.'.$file->teacher->user->extension}}" alt="Фотография Фамилия Имя Отчество" title="Фотография Фамилия Имя Отчество">
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (необходим для JavaScript плагинов Bootstrap) -->
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
@stop