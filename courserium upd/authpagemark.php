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
    <title>Курс по основам интернет-маркетинга</title>
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
        <h4 style="margin-left:60px; margin-top: -32px">Курс по основам интернет-маркетинга</h4>
        <div class="picture">
            <img src="img/affiliate-marketing.png" class="card-img" alt="php">
        </div>
        <div class="card border-dark mb-3" style="max-width: 54rem; margin-top: -330px; margin-left: 400px">
            <div class="card-body text-dark">
                <p class="card-text">
                    Сегодня практически у каждой компании есть сайт и сообщества в социальных сетях. И это прекрасно, потому что очень удобно! Однако есть и обратная сторона медали.

                    Возникает ряд проблем:

                    1)Как руководителю компании не потеряться в новой и не совсем понятной для себя сфере, как найти подходящих специалистов и оценить адекватность их работы?
                    2)Как начинающему интернет-маркетологу понять, в каких сферах ему стоит развиваться, что важно, а что не очень, какими инструментами пользоваться?
                    3)Как специалисту в сфере digital-marketing доступно донести до заказчика свои идеи и замыслы, как помочь ему выбрать корректную стратегию развития проекта в digital и следовать ей?
                    Этот курс предназначен именно для тех, кто хочет узнать, что такое интернет-маркетинг (digital marketing), а также поближе познакомиться с компонентами этой системы: SEO, SMM, e-mail marketing, контекстной рекламой, digital PR.

                    Если же смотреть шире, то этот курс поможет людям, которые не знакомы со сферой онлайн-маркетинга, и специалистам, уже работающим в этой сфере, говорить на одном языке и вместе создавать и развивать классные, качественные и полезные проекты.   </p>

                <p>Программа курса:</p>
                <p>1)Введение: Общая информация о курсе, Базовые понятия и принципы интернет-маркетинга, Организация работы над интернет-проектом, Обзор Trello, Задачи;</p>
                <p>2)Основы функционирования компьютерных сетей: Введение, Канальный уровень. Межсетевой уровень, Транспортный уровень. Прикладной уровень, Порты. Виртуальные сети, Задачи;</p>
                <p>3)Сайты. Веб-аналитика: Этапы работы над сайтом компании. Часть 1, Часть 2, Вход через панель администратора, вход по FTP, Веб-аналитика, Задачи;</p>
                <p>4)E-mail marketing: Общие понятия, Основные этапы работы с почтовыми рассылками, Обзор функционала сервисов почтовых рассылок на примере MadMimi, Задаи;</p>
                <p>5)Digital Public Relations: Введение, Направления работы в Digital Public Relations, Информационные поводы;</p>
                <p>6)Social Media Marketing: Суть и особенности, Концепция и как её создавать, Ведение сообщества, Коммьюнити-менеджмент, Распространение, Команда;</p>
                <p>7)Контекстная реклама: Введение, Работа с рекламными кампаниями, Знакомство с Google Adwords и Яндекс Директ, Задачи;</p>
                <p>8)Search Engine Optimization: Введение, Направление работ по поисковой оптимизации сайтов, Инструменты, Последний урок.</p>
            </div>
        </div>
        <div class="container">
            <div class="course" style="margin-top: -850px; margin-left: -105px">
        <button type="button" style="width: 300px" a href="#" class="btn btn-outline-dark">Пройти курс</button>
        </div>
        </div>
</header>
</body>
</html>