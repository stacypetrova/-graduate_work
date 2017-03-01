@extends('app')

@section('content')
    <!-- Последние CSS -->
    <link rel="stylesheet" type="text/css" href="/css/kafedra_subjects.css">

    <div class="content">
        <div class="container" id="content">
            <h3>Предметы на кафедре</h3>
            <div class="row">
                <div class="col-md-4 ">
                    <a href="{{route('subjects_more')}}">
                        <button type="button" class="btn btn-info btn_list">
                            <p>Программирование интернет приложений</p></button>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{route('subjects_more')}}">
                        <button type="button" class="btn btn-info btn_list">
                            <p>Программирование интернет приложений</p></button>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('subjects_more')}}">
                        <button type="button" class="btn btn-info btn_list">
                            <p>Программирование интернет приложений</p></button>
                    </a>
                </div>

                <div class="col-md-4 ">
                    <a href="{{route('subjects_more')}}">
                        <button type="button" class="btn btn-info btn_list">
                            <p>Программирование интернет приложений</p></button>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{route('subjects_more')}}">
                        <button type="button" class="btn btn-info btn_list">
                            <p>Программирование интернет приложений</p></button>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('subjects_more')}}">
                        <button type="button" class="btn btn-info btn_list">
                            <p>Программирование интернет приложений</p></button>
                    </a>
                </div>

                <div class="col-md-4 ">
                    <a href="{{route('subjects_more')}}">
                        <button type="button" class="btn btn-info btn_list">
                            <p>Программирование интернет приложений</p></button>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{route('subjects_more')}}">
                        <button type="button" class="btn btn-info btn_list">
                            <p>Программирование интернет приложений</p></button>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{route('subjects_more')}}">
                        <button type="button" class="btn btn-info btn_list">
                            <p>Программирование интернет приложений</p></button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery (необходим для JavaScript плагинов Bootstrap) -->
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>

@stop