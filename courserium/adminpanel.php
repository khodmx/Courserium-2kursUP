<?php
require "db.php";
$user = R::findOne('users', 'login = ?', array($data['login']));
if($_SESSION['user_status'] <= 1 or $_SESSION['user_status'] == 3)
{
    header("location: list.php");
    exit();
}
$users = R::findAll('users');
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Админ панель</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#252424">
        <a class="navbar-brand" href="adminpanel.php"><h3 style="margin-top: 6px">Админ панель</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
        <div class="container">
            <div class="row">
                <div class="col col-sm-10">
                    <div style="margin-top: 40px;margin-left: -120px;width: 1420px">
                        <div class="table-responsive">
                            <table class="table"style="width: 900px">
                                <thead class="th" style="background-color: #252424; color:#fff">
                                <tr>
                                    <th class="admth">Пользователь</th>
                                    <th class="admth" style="margin-left: -300px;">email</th>
                                    <th class="admth" style="text-align: center;">id</th>
                                    <th class="admth" style="text-align: center; margin-right: 3rem;">Настройки</th>
                                </tr>
                             </thead>
                         <tbody >
<?php
require('mod.php');
$adm = new admin;
$adm -> link();
$adm ->return_inf();
?>
                         </tbody>
                            </table>
                               </div>
                           </div>
                        </div>
                     </div>
                  </div>
               <div class="col">
            <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-top: 1rem;margin-left: 2rem;background-color: #252424;">Изменить пользователя</button>
        <div class="dropdown-menu"
             role="menu" style="padding: 1rem;">
            <form action="modrig.php" method="post">
                <p>Введите email пользователя и id пользователя</p>
                <input type="text" name="email_root" style="min-width: 336px;">
                <div class="row" style="margin-top: 1rem;">
                    <div class="col"><button class="btn btn-primary" type="submit" name="add_admin" style="min-width: 80px;">Админ</button></div>
                    <div class="col"><button class="btn btn-primary" type="submit" name="add_user" style="min-width: 80px;">Пользователь</button></div>
                    <div class="col"><button class="btn btn-primary" type="submit" name="ent_del" style="min-width: 80px;">Удалить</button></div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
</header>
</body>

