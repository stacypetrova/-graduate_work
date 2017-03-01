@extends('app')

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
                                    <img src="/images/profile.png" alt="Фотография моего профиля" class="img-circle img-responsive center-block">
                                </div>
                                <h3>Петрова Анастасия Артуровна</h3>
                                <p><strong>Курс: </strong> 4 курс</p>
                                <p><strong>Группа: </strong> ИТ-431</p>
                                <p><strong>Количество предметов на кафедре: </strong> 7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <h3>Мои предметы</h3>
                    <div class="row">
                        <div class="col-md-3 subject_box">
                            <a href="{{route('dropbox_student')}}">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>

                        <div class="col-md-3 subject_box">
                            <a href="{{route('dropbox_student')}}">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>
                        <div class="col-md-3 subject_box">
                            <a href="{{route('dropbox_student')}}">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>
                        <div class="col-md-3 subject_box">
                            <a href="{{route('dropbox_student')}}">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 subject_box">
                            <a href="{{route('dropbox_student')}}">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>

                        <div class="col-md-3 subject_box">
                            <a href="{{route('dropbox_student')}}">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>
                        <div class="col-md-3 subject_box">
                            <a href="{{route('dropbox_student')}}">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>
                        <div class="col-md-3 subject_box">
                            <a href="{{route('dropbox_student')}}">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 subject_box">
                            <a href="{{route('dropbox_student')}}">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>

                        <div class="col-md-3 subject_box">
                            <a href="{{route('dropbox_student')}}">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>
                        <div class="col-md-3 subject_box">
                            <a href="{{route('dropbox_student')}}">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>
                        <div class="col-md-3 subject_box">
                            <a href="{{route('dropbox_student')}}">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop