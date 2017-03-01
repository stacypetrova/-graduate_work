@extends('app')

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
                                <td>Резюме Технический писатель</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Наименование предмета</td>
                                <td>Программирование интернет приложений</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Преподаватель</td>
                                <td>Попов Сергей Валерьевич</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Курс</td>
                                <td>4 курс</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Группа</td>
                                <td>ИТ-431</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Добавлено</td>
                                <td>17.06.2016 0:15</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Расширение файла</td>
                                <td>docx</td>
                            </tr>
                            <tr>
                                <td class="stolbec_width">Описание</td>
                                <td>Резюме (от фр. résumé или лат. curriculum vitae — «течение жизни», жизнеописание,
                                    произносится кури́кулюм ви́тэ, часто сокращают до CV, в советской традиции
                                    автобиография) — документ, содержащий информацию о навыках, опыте работы,
                                    образовании и другую относящуюся к делу информацию, обычно требуемую при
                                    рассмотрении кандидатуры человека для найма на работу.
                                </td>
                            </tr>
                        </table>
                        <div class="btn_nazad">
                            <a class="btn btn-primary" href="{{route('dropbox_student')}}" role="button">Назад</a>
                            <button type="button" class="btn btn-success download"><span
                                        class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span>Скачать
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img class="img-thumbnail" src="/images/foto.png" alt="Фотография Фамилия Имя Отчество" title="Фотография Фамилия Имя Отчество">
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (необходим для JavaScript плагинов Bootstrap) -->
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
@stop