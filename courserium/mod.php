<?php
require "db.php";
require "ldb.php";
class admin extends ldb
{


    function return_inf()
    {
        $link = mysqli_connect($this->host, $this->dbase, $this->username, $this->password)
        or die(mysqli_error($link));


        $result = mysqli_query($link, " SELECT `id`,`login`, `email` FROM `users` WHERE user_status != '2' ");

        $array = array();

        ($len = mysqli_num_rows($result));


        for ($i = 0; $len > $i; $i++) {

            array_push($array, mysqli_fetch_row($result));
        }


        for ($i = 0; count($array) > $i; $i++) {

            echo "<tr>";

            $key = $array[$i];

            for ($j = 0; count($key) > $j; $j++) {
                echo "<th>" . $key[$j] . "</th>";
            }

            echo "</tr";
        }
    }
}
    ?>