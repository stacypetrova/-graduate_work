<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 мета тега ДОЛЖНЫ идти ПЕРВЫМИ в head;
    любой другой head контент ДОЛЖЕН идти ПОСЛЕ этих тегов -->
    <title>Авторизация</title>
    <link rel="shortcut icon" href="/images/icon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Google шрифт-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed|PT+Sans+Narrow" rel="stylesheet">

    <!-- Плагин Jasny Bootstrap -->
    <link rel="stylesheet" href="/node_modules/jasny-bootstrap/css/jasny-bootstrap.min.css">

    <!-- Последние CSS -->
    <link rel="stylesheet" type="text/css" href="/css/auth.css">

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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Авторизация на сайте</h3>
                        </div>
                        <div class="panel-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Упс!</strong>Логин или пароль были введены неверно.<br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                                {!! csrf_field() !!}

                                <div class="form-group">
                                    <label class="col-md-4 control-label">
                                        <span class="glyphicon glyphicon-user"></span> E-Mail:
                                    </label>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="Имя пользователя" value="{{ old('email') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">
                                        <span class="glyphicon glyphicon-lock"></span> Пароль:
                                    </label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password" placeholder="Ваш пароль">
                                    </div>
                                </div>

                                <div class="form-group remember">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <p>
                                                <label class="remember_me">
                                                    <input type="checkbox" name="remember"> Запомнить меня
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4 auth_buttons">
                                            <button type="submit" class="btn btn-success enter">Войти</button>
                                            <a class="btn btn-primary" href="{{route('auth_student_register')}}">Регистрация</a>
                                    </div>
                                </div>
                            </form>
                        </div>
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

</body>
</html>