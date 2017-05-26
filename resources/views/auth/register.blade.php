<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 мета тега ДОЛЖНЫ идти ПЕРВЫМИ в head;
    любой другой head контент ДОЛЖЕН идти ПОСЛЕ этих тегов -->
    <title>Регистрация преподавателя</title>
    <link rel="shortcut icon" href="/images/icon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Google шрифт-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed|PT+Sans+Narrow" rel="stylesheet">

    <!-- Bootstrap-FileInput (плагин) -->
    <link rel="stylesheet" href="/node_modules/bootstrap-fileinput/css/fileinput.min.css">

    <!-- Последние CSS -->
    <link rel="stylesheet" type="text/css" href="/css/register.css">

    <!-- HTML5 и Respond.js для поддержки IE8 элементов HTML5 и медиа-запросов -->
    <!-- ПРЕДУПРЕЖДЕНИЕ: Respond.js не работает, если вы просматриваете страницу с помощью file:// -->
    <script src="/js/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

<header>
    <nav class="navbar navbar-default menu">
        <div class="container-fluid">
            <!-- Бренд и переключатель группируются для лучшего отображения на дисплеях мобильных телефонов -->
            <div class="navbar-header">
                <img src="/images/logo_ru.png" alt="Логотип Луганского национального университета">
            </div>
            <h1>Система обмена данными Луганского национального университета им. Владимира Даля</h1>
        </div><!-- /.container-fluid -->
    </nav>
</header>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Регистрация преподавателя</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="{{ url('auth/register') }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}

                            <div class="row">
                                <input type="hidden" name="user_type" value="teacher">
<!------------------------------------Добавление аватара------------------------------------------------------------------->
                                <div class="col-md-3 avatar_foto">
                                    <div class="form-group">
                                        <div id="kv-avatar-errors-2" class="center-block"
                                             style="width:800px;display:none"></div>
                                        <div class="kv-avatar center-block" style="width:200px">
                                            <input id="avatar-2" name="avatar-2" type="file" class="file-loading">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-9">
{{----------------------------------------------------Ф.И.О. преподаватель----------------------------------------------}}
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-3 control-label">Ф.И.О.:</label>
                                        <div class="col-md-9">
                                            <input type="text" placeholder="Иванов Иван Иванович"
                                                   class="col-md-10 form-control" name="name" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


{{------------------------------------------------Анкета преподавателя-----------------------------------------------}}
                                    <div class="form-group">
                                        <label for="post" class="col-md-3 control-label">Преподаватель:</label>
                                        <div class="col-md-9">
                                            <select name="teacher" class="selectpicker" title="Выберите анкету преподавателя"
                                                    data-live-search="true" data-width="100%">
                                                @foreach($teacher->toArray() as $key=>$value)
                                                    <option value="{{$value['id']}}">{{$value['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


{{----------------------------------------------E-mail адрес преподаватель----------------------------------------------}}
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-3 control-label">E-Mail адрес:</label>
                                        <div class="col-md-9">
                                            <input type="email" placeholder="email@email.email" class="form-control"
                                                   name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>


{{----------------------------------------------Пароль преподавателя-------------------------------------------------------}}
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-3 control-label">Пароль:</label>

                                        <div class="col-md-7">
                                            <input type="password" placeholder="Ваш пароль" class="form-control"
                                                   name="password">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <label for="password_confirmation" class="col-md-3 control-label">Повторить пароль:</label>

                                        <div class="col-md-7">
                                            <input type="password" placeholder="Повторите пароль" class="form-control"
                                                   name="password_confirmation">

                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-btn fa-user"></i>Зарегистрироваться
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (необходим для JavaScript плагинов Bootstrap) -->
<script src="/node_modules/jquery/dist/jquery.min.js"></script>

<!-- Подключите все скомпилированные плагины (ниже)
или добавьте другие файлы при необходимости -->
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

<!--Плагин Bootstrap-FileInput-->
<script src="/node_modules/bootstrap-fileinput/js/fileinput.min.js"></script>
<script src="/node_modules/bootstrap-fileinput/themes/fa/theme.js"></script>
<script src="/node_modules/bootstrap-fileinput/js/locales/ru.js"></script>

<script>

    //-----------------------------------------------Добавление аватара----------------------------------------------------------------
    var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' +
            'onclick="alert(\'Call your custom code here.\')">' +
            '<i class="glyphicon glyphicon-tag"></i>' +
            '</button>';
    $("#avatar-2").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: '',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<img src="/images/default-avatar-profile.jpg" alt="Ваш аватар" style="width:160px"><h6 class="text-muted">Выбрать файл</h6>',
        layoutTemplates: {main2: '{preview} ' + btnCust + ' {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });
    //-----------------------------------------------------------------------------------------------------------------------------------
</script>

</body>
</html>