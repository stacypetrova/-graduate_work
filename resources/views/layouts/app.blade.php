<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 мета тега ДОЛЖНЫ идти ПЕРВЫМИ в head;
    любой другой head контент ДОЛЖЕН идти ПОСЛЕ этих тегов -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Google шрифт-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed|PT+Sans+Narrow" rel="stylesheet">

    <!-- Плагин Jasny Bootstrap -->
    <link rel="stylesheet" href="/node_modules/jasny-bootstrap/css/jasny-bootstrap.min.css">

    <!-- Последние CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">

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
                <a class="navbar-brand" href="{{route('profile')}}"><img src="/images/logo_ru.png"
                                                               alt="Логотип Луганского национального университета"></a>
            </div>

            <!-- Сбор навигационных ссылок, форм и другого контента для переключения -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav first_menu">
                    <li><a href="{{route('profile')}}">Мои предметы</a></li>
                    <li><a href="{{route('list_teachers')}}">Преподаватели</a></li>
                    <li><a href="{{route('list_subjects')}}">Предметы на кафедре</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="/auth/logout" class="button" role="button">Выход</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div class="submenu">
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        @if(Auth::user()->user_type != 'student')
                            <a class="btn btn-success" href="{{route('file.create')}}" role="button">
                            <i class="fa fa-cloud-download" aria-hidden="true"></i>Добавить файл</a>
                        @endif
                        <input type="text" class="form-control" placeholder="Введите запрос">
                    </div>
                    <button type="submit" class="btn btn-default">Поиск</button>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
</header>
@yield('content')


<!-- jQuery (необходим для JavaScript плагинов Bootstrap) -->
<script src="/node_modules/jquery/dist/jquery.min.js"></script>

<!-- Подключите все скомпилированные плагины (ниже)
или добавьте другие файлы при необходимости -->
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Плагин Jasny Bootstrap -->
<script src="/node_modules/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>

<script>
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.target // activated tab
        e.relatedTarget // previous tab
    });
</script>

</body>
</html>