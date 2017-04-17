@extends('app')

@section('content')
    <!-- Bootstrap-table (плагин) -->
    <link rel="stylesheet" href="/node_modules/bootstrap-table/dist/bootstrap-table.css">
    <link rel="stylesheet" href="/css/review_subject.css">

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 foto_teacher">
                    <div class="thumbnail">
                        <img src="/images/foto.png" alt="Фамилия Имя Отчество">
                        <div class="caption">
                            <div class="FIO">
                                <h3>Фамилия Имя Отчество</h3>
                            </div>
                            <div class="position">
                                <p>Должность</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <table class="table table-no-bordered tableFiles" id="tableFiles"
                           data-toggle="table"
                           data-sort-name="name"
                           data-sort-order="desc"
                           data-search="true"
                           data-pagination="true"
                           data-page-size="10"
                           data-page-list="[5,10,20]"
                           data-pagination-first-text="Первая"
                           data-pagination-pre-text="Предыдущая"
                           data-pagination-next-text="Следующая"
                           data-pagination-last-text="Последняя"
                           data-show-refresh="true"
                           data-toolbar="#toolbar">
                        <thead>
                        <tr>
                            <!-- <th data-field="state" data-checkbox="true"></th> -->
                            <th data-field="name" data-sortable="true">Имя</th>
                            <th data-field="date">Добавлено</th>
                            <th data-field="expansion" data-sortable="true">Расширение</th>
                            <th data-field="download" data-align="center">Скачать</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newfiles as $newfile)
                        <tr>
                                <td>{{ $newfile->title_file }}</td>
                                <td>{{ $newfile->created_at }}</td>
                                <td>{{ $newfile->extension }}</td>
                                <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (необходим для JavaScript плагинов Bootstrap) -->
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <!--Плагин Bootstrap-table-->
    <script src="/node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script>
    <script src="/node_modules/bootstrap-table/dist/locale/bootstrap-table-ru-RU.min.js"></script>

    <script>
        var $table = $('#table');
        $(function () {
        });
    </script>

@stop