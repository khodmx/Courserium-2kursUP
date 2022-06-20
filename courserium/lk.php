<?php
require "db.php";
if($_SESSION['user_status'] < 1 or $_SESSION['user_status'] == 3)
{
    header("location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Личный кабинет</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/navigation-with-search.css">
</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#252424">
        <a class="navbar-brand"><h3 style="margin-top: 6px">Курсериум / Личный кабинет</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="row register-form">
        <div class="col-md-8">
            <div class="col" style="margin-top: 240px">
                <section>
                <div class="container">
                    <div class="card" type="button" href="#" style="background-color: #252424; width: 980px; height: 133px; left: -33px; top: -218px">
                        <div class ="card-img-overlay col-md-9 offset-md-1" style="top: 29px">
                            <h2 class="card-title" style="color: #fff">Мои курсы</h2>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="card" type="button" href="#" style="background-color: #252424; width: 980px; height: 133px; left: -18px; top: -203px">
                        <div class ="card-img-overlay col-md-9 offset-md-1" style="top: 29px">
                            <h2 class="card-title" style="color: #fff">Кошелёк</h2>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="card" type="button" href="#" style="background-color: #252424; width: 980px; height: 133px; left: -18px; top: -188px">
                        <div class ="card-img-overlay col-md-9 offset-md-1" style="top: 29px">
                            <h2 class="card-title" style="color: #fff">Настройки</h2>
                        </div>
                    </div>
                </section>
                <section>
                    <a class="button" href="list.php" role="button"><div class="card" type="button" role="button"  style="background-color: #252424; width: 980px; height: 133px; left: -18px; top: -173px">
                        <div class ="card-img-overlay col-md-9 offset-md-1" style="top: 29px">
                            <h2 class="card-title" style="color: #fff">Админ панель</h2>
                        </div>
                    </div>
                    </a>
                </section>
                <section>
                    <div class="card" type="button" href="#" style="background-color: #252424; width: 980px; height: 133px; left: -18px; top: -158px">
                        <div class ="card-img-overlay col-md-9 offset-md-1" style="top: 29px">
                            <h2 class="card-title" style="color: #fff">Выход из аккаунта</h2>
                        </div>
                    </div>
                </section>
            </div>
        </div>
</header>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>