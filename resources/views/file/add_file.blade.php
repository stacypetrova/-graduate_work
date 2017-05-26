@extends('layouts.app_teacher')

@section('title')
    Добавление файла
@stop

@section('content')

    <!-- Bootstrap-select (плагин) -->
    <link rel="stylesheet" href="/node_modules/bootstrap-select/dist/css/bootstrap-select.min.css">

    <!-- Bootstrap-FileInput (плагин) -->
    <link rel="stylesheet" href="/node_modules/bootstrap-fileinput/css/fileinput.min.css">

    <!-- Последняя CSS -->
    <link rel="stylesheet" href="/css/add_file.css">

    <!--Иконки Font-awesome-->
    <link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">



<div class="contant">
    <h1 class="text-center">Добавление файла</h1>
    <div class="container">
        <form action="{{route('file.create')}}" method="post" role="form" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="title_file">Наименование файла:</label>
                <input name="title_file" type="title_file" class="form-control" id="title_file" placeholder="Введите название файла">
            </div>
            <div class="row">
                <div class="col-md-3 kurs">
                    <div class="form-group">
                        <select name="kurs" class="selectpicker" title="Выберите курс" data-width="100%">
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
                    </div>
                </div>
                <div class="col-md-3 group">
                    <div class="form-group">
                        <select name="group" class="selectpicker" title="Выберите группу" data-live-search="true" data-width="100%">
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
                    </div>
                </div>
                <div class="col-md-6 subject">
                    <div class="form-group">
                        <select name="subject" class="selectpicker" title="Выберите предмет" data-live-search="true" data-width="100%">
                            <optgroup>
                                <option>Периферийные устройства</option>
                                <option>Теория кодирования дискретной информации</option>
                                <option>Программирование интернет приложений</option>
                                <option>Иностранный язык</option>
                                <option>Защита информации</option>
                                <option>Технологии корпоративных сетей</option>
                                <option>Технологии проетировния компьютерных систем</option>
                                <option>Системы искусственного интеллекта</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>

            <!--Добавление файла-->
            <div class="form-group chooseFile">
                <label class="control-label">Выберите файл:</label>
                <input id="input-file" name="input_file" type="file" multiple class="file-loading">
            </div>

            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea name="description" class="form-control" rows="3" id="description"></textarea>
            </div>

            <!--Сохранение файла-->
            <div class="save_file">
                <button class="btn btn-success" type="submit">Сохранить</button>
            </div>
        </form>
    </div>
</div>



<!-- jQuery (необходим для JavaScript плагинов Bootstrap) -->
<script src="/node_modules/jquery/dist/jquery.min.js"></script>

<!--Плагин Bootstrap-select-->
<script src="/node_modules/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="/node_modules/bootstrap-select/dist/js/i18n/defaults-ru_RU.min.js"></script>
<!--Плагин Bootstrap-FileInput-->
<script src="/node_modules/bootstrap-fileinput/js/fileinput.min.js"></script>
<script src="/node_modules/bootstrap-fileinput/themes/fa/theme.js"></script>
<script src="/node_modules/bootstrap-fileinput/js/locales/ru.js"></script>

<script>
    $("#input-file").fileinput({
        language: "ru",
        uploadUrl: "/file-upload-batch/2"
    });
</script>

@stop