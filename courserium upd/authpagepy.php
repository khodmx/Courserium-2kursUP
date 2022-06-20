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
        <h4 style="margin-left:60px; margin-top: -32px">Курс по Python</h4>
        <div class="picture">
            <img src="img/python-acc9c68ff62d7.png" class="card-img" alt="python"
                 style="width: 500px; margin-left: -105px">
        </div>
        <div class="card border-dark mb-3" style="max-width: 54rem; margin-top: -300px; margin-left: 400px">
            <div class="card-body text-dark">
                <p class="card-text">
                    В курсе рассматриваются основные типы данных, конструкции и принципы структурного программирования.
                    Выбор Python обусловлен такими его преимуществами как ясность кода и быстрота реализации на нем программ.
                    Основной целью курса является знакомство с программированием, формирование базовых понятий структурного программирования.
                    Курс разбит на 8 модулей, каждый из них содержит теоретические и практические материалы и задания.</p>

                <p>Модули курса:</p>
                <p>1)Ввод-вывод данных;</p>
                <p>2)Условный оператор ;</p>
                <p>3)Типы данных ;</p>
                <p>4)Циклы for и while ;</p>
                <p>5)Строковый тип данных;</p>
                <p>6)Списки;</p>
                <p>7)Функции;</p>
                <p>8)Работа над мини-проектом.</p>
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