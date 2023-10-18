<?php
include('conexion.php');

$newsku=$_POST['SKU'];
$newproduct=$_POST['producto'];
$newprecio=$_POST['precio'];
$actualizar=$_POST['actualizar'];

$actualizacion="update productos set sku='$newsku',producto='$newproduct',precio='$newprecio' where sku='$actualizar'";

odbc_exec($link2,$actualizacion);

header("Location: ../lisprod.php");

?>