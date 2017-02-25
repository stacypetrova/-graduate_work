@extends('app_teacher')

@section('content')
    <link rel="stylesheet" type="text/css" href="/css/style_content_teacher.css">

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-info myPanel">
                        <div class="panel-body">
                            <div class="profile">
                                <div class="profile_logo">
                                    <img src="/images/puppy.jpg" alt="Фотография моего профиля" class="img-circle img-responsive center-block">
                                </div>
                                <h3>Иванова Анастасия Ивановна</h3>
                                <p><strong>Должность: </strong> Старший преподаватель</p>
                                <p><strong>Количество предметов: </strong> 4</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <h3>Предметы</h3>
                    <div class="row">
                        <div class="col-md-3 subject_box">
                            <a href="dropbox_teacher.html">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>

                        <div class="col-md-3 subject_box">
                            <a href="dropbox_teacher.html">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>
                        <div class="col-md-3 subject_box">
                            <a href="dropbox_teacher.html">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>
                        <div class="col-md-3 subject_box">
                            <a href="dropbox_teacher.html">
                                <button type="button" class="btn btn-primary btn_list">
                                    <p>Программирование интернет приложений</p></button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
        </div>


        <!-- jQuery (необходим для JavaScript плагинов Bootstrap) -->
        <script src="/node_modules/jquery/dist/jquery.min.js"></script>

        <!-- Подключите все скомпилированные плагины (ниже)
        или добавьте другие файлы при необходимости -->
        <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Плагин Jasny Bootstrap -->
        <script src="/node_modules/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>


@stop