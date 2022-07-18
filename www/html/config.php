<?php
    $host = "mysql";
    $user = "user";
    $password = "userdocker";
    $database = "library";

    $db = mysqli_connect($host, $user, $password, $database);

    if( !$db ){
        echo "Connect to database failed..." . mysqli_connect_error();
    }
?>
