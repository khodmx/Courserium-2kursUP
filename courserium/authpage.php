<?php
require "db.php";

if($_SESSION['user_status'] < 1 or $_SESSION['user_status'] == 3)
{
    header('location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Курс</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#252424">
        <a class="navbar-brand" href="authorized.php"><h3 style="margin-top: 6px">Курсериум</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Поиск</button>
            </form>
            <ul class="navbar-nav mr-auto">
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown" type="button" href="#" style="margin-left: 544px" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Язык</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Русский</a>
                            <a class="dropdown-item" href="#">English</a>
                        </div>
                    </div>
                <a class="btn btn-outline-light" aria-hidden="true" role="button" href="lk.php"
                   style="margin-left:5px; width:175px; text-align: right" type="button"><i class="fa fa-user fa-lg align-items-center"
                   style="margin-right: 8px" aria-hidden="true"></i>Личный кабинет</a>
            </ul>
        </div>
    </nav>
    <div class="dropdown">
        <button type="button" class="btn dropdown" data-toggle="dropdown">
            <i class="fa fa-bars fa-lg" style="margin-top: 10px;margin-left: 5px" aria-hidden="true"></i>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Обучение</a>
            <a class="dropdown-item" href="#">Тесты</a>
            <a class="dropdown-item" href="#">Вебинары</a>
            <a class="dropdown-item" href="#">Тарифы</a>
            <a class="dropdown-item" href="#">Форум</a>
            <a class="dropdown-item" href="#">FAQ</a>
            <a class="dropdown-item" href="#">Социальные сети</a>
            <a class="dropdown-item" href="#">Обратная связь</a>
        </div>
    </div>
        <h4 style="margin-left:60px; margin-top: -32px">Курс по HTML и CSS</h4>
        <div class="picture">
            <img src="img/s1200.png" class="card-img" alt="htmlcss">
        </div>
        <div class="card border-dark mb-3" style="max-width: 54rem; margin-top: -300px; margin-left: 400px">
            <div class="card-body text-dark">
                <p class="card-text">
                    Целью курса является формирование системы понятий, знаний, умений и навыков в области изучения основ HTML, включающего в себя формирование навыков самостоятельной работы через методы проектирования и создания собственных web-страниц.</p>

                <p>В результате изучения дисциплины вы научитесь:</p>
                    <p>1) Иллюстрировать web-страницы различными изображениями;</p>
                    <p>2) Создавать навигацию между несколькими страницами;</p>
                    <p>3) Работать с визуальным редактором Kompozer;</p>
                    <p>4) Описывать стили внутри HTML-файлов и привязывать к web-страницам внешние css-файлы;</p>
                    <p>5) Создавать css-файлы с помощью редактора блокнот или notepad++;</p>
                    <p>6) Пользоваться блоками и описывать их оформление с помощью CSS;</p>
                    <p>7) Вставлять на web-страницу готовые скрипты и отлаживать их работоспособность;</p>
                    <p>8) Регистрироваться на бесплатном хостинге и публиковать файлы с помощью встроенного загрузчика.</p>
            </div>
        </div>
        <div class="container">
            <div class="course" style="margin-top: -355px; margin-left: -105px">
        <button type="button" style="width: 300px" a href="#" class="btn btn-outline-dark">Пройти курс</button>
        </div>
        </div>
</header>
</body>
</html>