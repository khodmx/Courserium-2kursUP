<?php
class ldb{

public $host = 'localhost';
public $dbase = "dbcourserium";
public $username = 'root';
public $password = 'root';

function link(){
        $link = mysqli_connect($this->host,$this->dbase,$this->username,$this->password)
        or die(mysqli_error($link));

    }
}

?>