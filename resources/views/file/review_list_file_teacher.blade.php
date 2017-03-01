@extends('app')

@section('content')
    <!-- Bootstrap-table (плагин) -->
    <link rel="stylesheet" href="/node_modules/bootstrap-table/dist/bootstrap-table.css">

    <!-- Bootstrap-select (плагин) -->
    <link rel="stylesheet" href="/node_modules/bootstrap-select/dist/css/bootstrap-select.min.css">

    <!--Последние CSS-->
    <link rel="stylesheet" href="/css/dropbox_teacher.css">

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar">
                    <div class="left_menu">
                        <ul class="nav nav-pills nav-stacked"  id="myTab">
                            <li class="active"><a href="#files" data-toggle="tab"><span class="fa fa-files-o" aria-hidden="true"></span>Файлы</a></li>
                            <li><a href="#groups" data-toggle="tab"><span class="fa fa-users" aria-hidden="true"></span>Группы</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="files">
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
                                <tr>
                                    <td><a href="{{route('review_file')}}">Резюме Технический писатель</a></td>
                                    <td>17.06.2016 0:15</td>
                                    <td>docx</td>
                                    <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Программирование интернет приложений</td>
                                    <td>27.10.2016 22:47</td>
                                    <td>rar</td>
                                    <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Tekhnologia_korporativnykh_setey</td>
                                    <td>02.10.2016 19:58</td>
                                    <td>ppt</td>
                                    <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Резюме Технический писатель</td>
                                    <td>17.06.2016 0:15</td>
                                    <td>docx</td>
                                    <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Программирование интернет приложений</td>
                                    <td>27.10.2016 22:47</td>
                                    <td>rar</td>
                                    <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Tekhnologia_korporativnykh_setey</td>
                                    <td>02.10.2016 19:58</td>
                                    <td>ppt</td>
                                    <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Резюме Технический писатель</td>
                                    <td>17.06.2016 0:15</td>
                                    <td>docx</td>
                                    <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Программирование интернет приложений</td>
                                    <td>27.10.2016 22:47</td>
                                    <td>rar</td>
                                    <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                </tr>
                                <tr>
                                    <td>Tekhnologia_korporativnykh_setey</td>
                                    <td>02.10.2016 19:58</td>
                                    <td>ppt</td>
                                    <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane tab-paneGroups" id="groups">
                            <select class="selectpicker" title="Выберите курс" data-width="fit">
                                <optgroup label="Бакалавриат">
                                    <option>1 курс</option>
                                    <option>2 курс</option>
                                    <option>3 курс</option>
                                    <option>4 курс</option>
                                </optgroup>
                                <optgroup label="Магистратура">
                                    <option>5 курс</option>
                                    <option>6 курс</option>
                                </optgroup>
                            </select>
                            <select class="selectpicker" title="Выберите группу" data-width="fit" data-live-search="true">
                                <optgroup>
                                    <option>ИТ-431</option>
                                    <option>ИТ-432</option>
                                    <option>ИТ-433</option>
                                    <option>ИТ-441</option>
                                    <option>ИТ-442</option>
                                    <option>ИТ-443</option>
                                    <option>ИТ-451</option>
                                    <option>ИТ-452</option>
                                    <option>ИТ-461</option>
                                    <option>ИТ-462</option>
                                    <option>ИТ-451м</option>
                                    <option>ИТ-461м</option>
                                </optgroup>
                            </select>
                            <div class="tableGroups">
                                <table class="table table-bordered" id="tableGroups"
                                       data-toggle="table"
                                       data-sort-name="name"
                                       data-sort-order="desc"
                                       data-pagination="true"
                                       data-page-size="10"
                                       data-page-list="[5,10,20]"
                                       data-pagination-first-text="Первая"
                                       data-pagination-pre-text="Предыдущая"
                                       data-pagination-next-text="Следующая"
                                       data-pagination-last-text="Последняя">
                                    <thead>
                                    <tr>
                                        <!-- <th data-field="state" data-checkbox="true"></th> -->
                                        <th data-field="name" data-sortable="true">Название файла</th>
                                        <th data-field="date">Добавлено</th>
                                        <th data-field="expansion" data-sortable="true">Расширение</th>
                                        <th data-field="download" data-align="center">Скачать</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="{{route('review_file')}}#anchorGroup">Резюме Технический писатель</a></td>
                                        <td>17.06.2016 0:15</td>
                                        <td>docx</td>
                                        <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Программирование интернет приложений</td>
                                        <td>27.10.2016 22:47</td>
                                        <td>rar</td>
                                        <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Tekhnologia_korporativnykh_setey</td>
                                        <td>02.10.2016 19:58</td>
                                        <td>ppt</td>
                                        <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Резюме Технический писатель</td>
                                        <td>17.06.2016 0:15</td>
                                        <td>docx</td>
                                        <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Программирование интернет приложений</td>
                                        <td>27.10.2016 22:47</td>
                                        <td>rar</td>
                                        <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Tekhnologia_korporativnykh_setey</td>
                                        <td>02.10.2016 19:58</td>
                                        <td>ppt</td>
                                        <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Резюме Технический писатель</td>
                                        <td>17.06.2016 0:15</td>
                                        <td>docx</td>
                                        <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Программирование интернет приложений</td>
                                        <td>27.10.2016 22:47</td>
                                        <td>rar</td>
                                        <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                    </tr>
                                    <tr>
                                        <td>Tekhnologia_korporativnykh_setey</td>
                                        <td>02.10.2016 19:58</td>
                                        <td>ppt</td>
                                        <td><a href="#"><span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery (необходим для JavaScript плагинов Bootstrap) -->
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>

    <!--Плагин Bootstrap-table-->
    <script src="/node_modules/bootstrap-table/dist/bootstrap-table.min.js"></script>
    <script src="/node_modules/bootstrap-table/dist/locale/bootstrap-table-ru-RU.min.js"></script>
    <!--Плагин Bootstrap-select-->
    <script src="/node_modules/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/node_modules/bootstrap-select/dist/js/i18n/defaults-ru_RU.min.js"></script>

    <script>
        var $table = $('#table');
        $(function () {
        });
        $('.selectpicker').selectpicker({
            size: 8
        });
    </script>
@stop