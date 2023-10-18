<?php
include('conexion.php');

$newname1=$_POST['name'];
$newname2=$_POST['name2'];
$newlast1=$_POST['lastname'];
$newlast2=$_POST['lastname2'];
$newcorreo=$_POST['mail'];
$newuser=$_POST['user'];
$newpass=$_POST['pass'];
$actualizar=$_POST['actualizar'];

$actualizacion="update users set primernombre='$newname1',segundonombre='$newname2',primerapellido='$newlast1',segundoapellido='$newlast2',correo='$newcorreo',username='$newuser',pass='$newpass' where username='$actualizar'";

odbc_exec($link2,$actualizacion);

header("Location: ../reguser.php");

?>