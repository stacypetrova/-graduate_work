@extends('layouts.app')

@section('title')
    Предметы на кафедре
@stop

@section('content')
    <!--Последние CSS-->
    <link rel="stylesheet" type="text/css" href="/css/kafedra_subjects_more.css">

    <div class="content">
        <h1 class="text-center">Наименование предмета</h1>
        <div class="container">
            @foreach($teachers as $teacher)
                <div class="panel-group">
                <div class="panel panel-info myPanel">
                    <div class="panel-body">
                        <div class="row">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    @if($teacher->kurs_group !== null)
                                        @foreach($teacher->kurs_group as $kurs_name=>$groups)
                                        <div class="col-md-4">
                                            <h3>{{$kurs_name}}</h3>
                                            @foreach($groups as $group_name=>$group)
                                                <p>{{$group_name}}</p>
                                            @endforeach
                                        </div>
                                        @endforeach
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>


    <!-- jQuery (необходим для JavaScript плагинов Bootstrap) -->
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
@stop