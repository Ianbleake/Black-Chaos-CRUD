<?php

    include('conexion.php');
    $id = $_GET['name'];

    echo"$id";
    $borrauser="delete from trabajadores where id='$id'";
    odbc_exec($link2,$borrauser);

    header("Location: ../Trabajadores.php");

?>