<?php

    include('conexion.php');
    $username = $_GET['name'];

    echo"$username";
    $borrauser="delete from users where username='$username'";
    odbc_exec($link2,$borrauser);

    header("Location: ../RegUser.php");

?>