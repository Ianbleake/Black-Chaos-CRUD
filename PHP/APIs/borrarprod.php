<?php

    include('conexion.php');
    $sku = $_GET['name'];

    echo"$sku";
    $borrauser="delete from productos where sku='$sku'";
    odbc_exec($link2,$borrauser);

    header("Location: ../lisprod.php");

?>