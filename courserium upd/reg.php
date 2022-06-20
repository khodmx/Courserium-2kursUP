<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/navigation-with-search.css">
    
</head>
<?php
require 'signup.php';
?>
<body style="background-color: #252424">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

.header {
    background-color: #fff;
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    font-size: 17px;
    color: #252424;

    -webkit-font-smoothing: antialiased;
    -webkit-overflow-scrolling: touch;
 }
.info{
    background-color: #252424;
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    font-size: 17px;
    color:#fff;
    width: 1440px;
    height: 70px;
    margin-left: -165px;
}
.info{
    margin-top: -70px;
}
.contacts{
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    font-size: 17px;
    margin-left: 15px;
}
.confidential{
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    font-size: 17px;
    margin-left: 15px;
}
.about{
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    font-size: 17px;
    margin-left: 15px;
}
.picture{
    width: 300px;
    height: 300px;
    margin-left: 60px;
    margin-top: 60px;
}
.card-body{
    font-family: "Roboto", sans-serif;
    font-weight: 400;
    font-size: 20px;
    margin-left: 15px;
}
.msg{
    border-top-width: 2px;
    border-radius: 3px;
    padding: 10px;
    background-color: #fcb503;
    font-family: "Roboto", sans-serif;
    color: #252424;
    text-align: center;
    font-weight: bold;
    width: 450px;
    margin-top: 10px;
    margin-left: 330px;

}
.message{
    font-family: "Roboto", sans-serif;
}
.admth{
    margin-left: -300px;

}
.admth2{
    margin-left: -300px;


}
.theadd .time {
    padding: 0 10px;
    font-size: 18px;
    display: inline-block;
}

    </style>
<div class="container">
    <header>
        <h2 class="text-white text-center" style="margin-top:200px;">Регистрация</h2>
        <form method="post">
            <div class="row mx-auto" style="width:450px; margin-left: 330px; margin-top: 30px">
                <label for="login"></label>
                <input type="text" minlength="8" maxlength="20" class="form-control" id="login" name="login" placeholder="Логин" value="<?php echo @$data['login']; ?>">
                </div>

            <div class="form-group mb-2 text-white mx-auto" style="width:450px; margin-top: -11px">
                <label for="exampleInputEmail1"></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="E-mail" value="<?php echo @$data['email']; ?>">
            </div>

            <div class="form-group mb-2 text-white mx-auto" style="width:450px;margin-top:-20px">
                <label for="exampleInputPassword1"></label>
                <input type="password" minlength="8" maxlength="20"  class="form-control" id="exampleInputPassword1" name="password" placeholder="Пароль" value="<?php echo @$data['password']; ?>">
            </div>

            <div class="form-group mb-2 text-white mx-auto" style="width:450px;margin-top:-20px">
                <label for="exampleInputPassword2"></label>
                <input type="password" minlength="8" maxlength="20"  class="form-control" id="exampleInputPassword2" name="password_confirm" placeholder="Подтвердите пароль" value="<?php echo @$data['password_confirm']; ?>">
            </div>

            <button type="submit" class="btn btn-success text-center" name="do_reg" style="width:450px;margin-top:4px; margin-left: 330px">Зарегистрироваться</button>

        </form>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </header>
</div>
</body>
</html>