
<?php
require "db.php";

$data = $_POST;
if (isset ($data['do_login']))
{
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if ($user)
    {
        if (password_verify($data['password'], $user->password))
        {

            $_SESSION['logged_user'] = $user;
            if ($_SESSION['logged_user']->user_status == 1)
            {
                header('Location: ./list.php');

            }elseif($_SESSION['logged_user']->user_status == 2)
            {
                header('Location: ./adminpanel.php');


            }else
            {
                $errors[] = 'Недостаточно прав';
            }

        }else
        {
            $errors[] = 'Неверный пароль';
        }
    }else
    {
        $errors[] = 'Пользователь не найден';
    }
    if ( ! empty ($errors))
    {

        echo '<div style="color: orangered;">'. array_shift($errors).'</div><hr>';


    }
}
?>