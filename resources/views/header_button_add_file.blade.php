<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 3 мета тега ДОЛЖНЫ идти ПЕРВЫМИ в head;
    любой другой head контент ДОЛЖЕН идти ПОСЛЕ этих тегов -->
    <title>Dropbox</title>

    <!-- Bootstrap -->
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Google шрифт-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed|PT+Sans+Narrow" rel="stylesheet">

    <!--Последние CSS-->
    <link rel="stylesheet" href="/css/header_button_add_file.css">

    <!--Иконки  -->
    <link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

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
                <a class="navbar-brand" href="index_teacher.html"><img src="/images/logo_ru.png" alt="Логотип Луганского национального университета"></a>
            </div>

            <!-- Сбор навигационных ссылок, форм и другого контента для переключения -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav first_menu">
                    <li class="active-link"><a href="index_teacher.html">Мой профиль</a></li>
                    <li><a href="teachers_teacher.html">Преподаватели</a></li>
                    <li><a href="subject_teacher.html">Предметы на кафедре</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Логин<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Настройки</a></li>
                            <li><a href="#">Смена пароля</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Выход</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <div class="submenu nav navbar-nav navbar-right submenu-right">
                <form class="navbar-form">
                    <div class="form-group">
                        <a class="btn btn-success" href="add_file_teacher.html" role="button">
                            <i class="fa fa-cloud-download" aria-hidden="true"></i>Добавить файл</a>
                        <input type="text" class="form-control" placeholder="Введите запрос">
                    </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
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


</body>
</html>