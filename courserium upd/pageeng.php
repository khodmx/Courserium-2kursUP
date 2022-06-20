<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Курс по английскому</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<?php
require "db.php";
?>
<body>
    <header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#252424">
        <a class="navbar-brand" href="index.php"><h3 style="margin-top: 6px">Курсериум</h3></a>
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
                        <a class="btn btn-outline-light" style="margin-left:10px" role="button" href="login.php">Вход</a>
                        <a class="btn btn-outline-light" style="margin-left:10px" role="button" href="reg.php">Регистрация</a>
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
        <h4 style="margin-left:60px; margin-top: -32px">Интенсив по английскому языку ("с нуля" до A1)</h4>
        <div class="picture">
            <img src="img/england-152143_1280.png" class="card-img" alt="eng"
            style="margin-left: 15px; width:270px">
        </div>
        <div class="card border-dark mb-3" style="max-width: 54rem; margin-top: -330px; margin-left: 400px">
            <div class="card-body text-dark">
                <p class="card-text">
                    Курс для ускоренного освоения базовой грамматики и лексики. </p>
                Вы:
                1) Изучите некоторые профессии, глаголы и существительные;
                2) Выучите все личные местоимения;
                3) Начнете строить свои первые предложения по-английски;
                4) Пополните словарный запас;
                5) Будете строить предложения по-английски;
                6) Сможете читать простые тексты;
                7) Будете легче понимать английскую речь на слух.
                <p>Программа курса:</p>
                    <p>1) О курсе;</p>
                    <p>2) Урок 1: смотрим, изучаем "to be", тренируемся;</p>
                    <p>3) Урок 2: повторяем, смотрим, тренируемся, еще больше тренируемся;</p>
                    <p>4) Урок 3: повторяем, изучаем negatives с "to be", тренируемся, еще больше тренируемся;</p>
                    <p>5) Урок 4: повторяем, изучаем questions с "to be", изучаем Present Simple, тренируемся;</p>
                    <p>6) Урок 5: повторяем to be, повторяем Present Simple, изучаем Present Continuous, тренируемся ;</p>
                    <p>7) Урок 6: повторяем смотрим изучаем there is/are, артикль "the", тренируем Future Simple;</p>
                    <p>8) Урок 7: повторяем Present Simple и Present Continuous, смотрим, изучаем одежду, тренируем Past Simple ;</p>
                    <p>9) Урок 8: учим неправильные глаголы, повторяем все слова курса, повторяем Present Simple и Present Continuous, повторяем Past и Future Simple;</p>
                    <p>10) Урок 9. Повторение: смотрим, пишем, читаем, говорим.</p>
            </div>
        </div>
        <div class="container">
            <div class="course" style="margin-top: -650px; margin-left: -105px">
        <button type="button" style="width: 300px" a href="#" class="btn btn-outline-dark">Пройти курс</button>
        </div>
        </div>
</header>
</body>
</html>