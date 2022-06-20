<?php
require "rb/rb.php";
R::setup( 'mysql:host=localhost;dbname=dbcourserium',
    'root', 'root' );
if ( !R::testConnection() )
{
    exit ('Нет соединения с базой данных');
}

session_start();

?>