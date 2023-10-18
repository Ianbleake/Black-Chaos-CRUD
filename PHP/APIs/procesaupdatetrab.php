<?php
include('conexion.php');

$newname1=$_POST['1name'];
$newname2=$_POST['2name'];
$newlast1=$_POST['apellido1'];
$newlast2=$_POST['apellido2'];
$newcorreo=$_POST['correo'];
$newtelefono=$_POST['telefono'];
$newpuesto=$_POST['puesto'];
$newsalario=$_POST['sueldo'];
$actualizar=$_POST['actualizar'];

echo"$newcorreo";

$actualizacion="update trabajadores set primernombre='$newname1',segundonombre='$newname2',primerapellido='$newlast1',segundoapellido='$newlast2',correo='$newcorreo',telefono='$newtelefono',puesto='$newpuesto',salario='$newsalario' where id='$actualizar'";

odbc_exec($link2,$actualizacion);

header("Location: ../trabajadores.php");

?>