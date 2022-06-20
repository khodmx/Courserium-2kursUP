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
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #252424;
            color: white;
        }
    </style>
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
        <a class="btn btn-outline-light" href="admlogout.php" role="button" style="margin-left:1080px">Выход</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
        <div class="container">
            <div class="row">
            <div class="col col-sm-10">
            <div style="margin-top: 40px;margin-left: -120px;">
            <div class="table-responsive">
                <table class="table">
                <thead class="th" style="background-color: #252424; color:#fff;">
                        <tr>
                            <th>Пользователь</th>
                            <th class="admth">E-mail</th>
                            <th>Настройки</th>
                            <th></th>
                        </tr>
                </thead>
                    <tbody>
<?php

if( ! empty($_SESSION['errors'])){
echo '<div style="color: orangered;">'.array_shift($_SESSION['errors']).'</div>';

}else if(! empty($_SESSION['login'])){
$st = $_SESSION['user_status'];
if($st == 1){

echo '<tr><td><div class="theadd"><span class="time" style="width: 192px">'.$_SESSION['login'].'</span></td>
<td><span class="time" style="width: auto">'.$_SESSION['email'].'</span></td>
<td><span class="icon"><form id="moder" style="display: none;" action="mod.php" method="post"></form>
<a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'moder\').submit()">>
<i style="color: mediumseagreen" class="fa fa-angle-double-up fa-lg" style="width: 20px;"></i></a>
<span class="time" style="width: 195px;">Повысить до администратора</span></td>
<td><form id="ban" style="display: none;" action="ban.php" method="post"></form>
<a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'ban\').submit()">
<i style="color: orangered" class="fa fa-ban"></i></a>
<span class="time" style="width: 195px;">Заблокировать пользователя</span></td></span></div></tr>';

}elseif($st == 3){
echo '<tr><td><div class="theadd"><span class="time" style="width: 192px">'.$_SESSION['login'].'</span></td>
<td><span class="time" style="width: auto;">'.$_SESSION['email'].'   Заблокирован</span></td>
<td><span class="icon"><form id="moder" style="display: none;" action="mod.php" method="post"></form>
<a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'moder\').submit()">
<i style="color: mediumseagreen" class="fa fa-angle-double-up fa-lg" style="width: 20px;"></i></a>
<span class="time" style="width: 195px;">Повысить до администратора</span></td>
<td><form id="ban" style="display: none;" action="razban.php" method="post"></form>
<a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'ban\').submit()">
<i style="color: mediumseagreen" class="fa fa-unlock-alt"></i></a>
<span class="time" style="width: 195px;">Разблокировать пользователя</span></td></span></tr></div></tr>';

}else{
echo '<tr><td><div class="theadd"><span class="time" style="width: 192px;">'.$_SESSION['login'].'</span></td>
<td><span class="time" style="width: auto;">'.$_SESSION['email'].' Администратор</span></td>
<td><span class="icon"><form id="moder" style="display: none;" action="unmod.php" method="post"></form>
<a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'moder\').submit()">
<i style="color: red" class="fa fa-angle-double-down fa-lg" style="width: 20px;"></i></a>
<span class="time" style="width: 195px;">Удалить права администратора</span></td>
<td><form id="ban" style="display: none;" action="ban.php" method="post"></form>
<a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'ban\').submit()">
<i style="color: orangered" class="fa fa-ban"></i></a>
<span class="time" style="width: 195px;">Заблокировать пользователя</span></td></span></div></tr>';
}

}else {
global $num;
$num = 1;
foreach ($users as $row) {
global $num;
$st = $row['user_status'];

if ($st == 1) {
echo '<tr><td><div class="theadd"><span class="time" style="width: 192px;">' . $row['login'] . '</span></td>
<td><span class="time" style="width: auto;">' . $row['email'] . '</span></td>
<td><span class="icon"><form id="moder' . $num . '" style="display: none;" action="mod.php" method="post">
<input type="text" name="button" style="display: none;" value="' . $num . '"></form>
<a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'moder' . $num . '\').submit()">
<i style="color: mediumseagreen" class="fa fa-angle-double-up fa-lg" style="width: 20px;"></i></a>
<span class="time" style="width: 195px;">Повысить до администратора</span></td>
<td><form id="ban' . $num . '" style="display: none;" action="ban.php" method="post">
<input type="text" name="button" style="display: none;" value="' . $num . '"></form>
<a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'ban' . $num . '\').submit()">
<i style="color: orangered" class="fa fa-ban"></i></a>
<span class="time" style="width: 195px;">Заблокировать пользователя</span></td></span></div></tr>';

} elseif ($st == 3) {
echo '<tr><td><div class="theadd"><span class="time" style="width: 192px;">' . $row['login'] . '</span></td>
<td><span class="time" style="width: auto;">' . $row['email'] . '  Заблокирован</span></td>
<td><span class="icon"><form id="moder' . $num . '" style="display: none;" action="mod.php" method="post">
<input type="text" name="button" style="display: none;" value="' . $num . '"></form>
<a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'moder' . $num . '\').submit()">
<i style="color: mediumseagreen" class="fa fa-angle-double-up fa-lg" style="width: 20px;"></i></a>
<span class="time" style="width: 195px;">Повысить до администратора</span></td>
<td><form id="ban' . $num . '" style="display: none;" action="razban.php" method="post">
<input type="text" name="button" style="display: none;" value="' . $num . '"></form>
<a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'ban' . $num . '\').submit()">
<i style="color: mediumseagreen" class="fa fa-unlock-alt"></i></a>
<span class="time" style="width: 195px;">Разблокировать пользователя</span></td></span</div></tr>';

} else {
echo '<tr><td><div class="theadd"><span class="time" style="width: 192px;">' . $row['login'] . '</span></td>
<td><span class="time" style="width: auto;">' . $row['email'] . '  Администратор</span></td>
<td><span class="icon"><form id="moder' . $num . '" style="display: none;" action="unmod.php" method="post">
<input type="text" name="button" style="display: none;" value="' . $num . '"></form>
<a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'moder' . $num . '\').submit()">
<i style="color: red" class="fa fa-angle-double-down fa-lg" style="width: 20px;"></i></a>
<span class="time" style="width: 195px;">Удалить права администратора</span></td>
<td><form id="ban' . $num . '" style="display: none;" action="ban.php" method="post">
<input type="text" name="button" style="display: none;" value="' . $num . '"></form>
<a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'ban' . $num . '\').submit()">
<i style="color: orangered" class="fa fa-ban"></i></a>
</a><span class="time" style="width: 195px;">Заблокировать пользователя</span></td></span></div></tr>';
}
$_SESSION["user_change$num"] = $row['id'];
$num++;
}
}
?>
</tbody>
 </table>
</div></div></div></div></div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
</header>
</body>