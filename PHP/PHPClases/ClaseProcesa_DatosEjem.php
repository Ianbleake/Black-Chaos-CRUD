<?php

echo"procesa datos";
echo"<br><br>";
echo $_POST['usuario']; //toma el valor enviado por el input llamado usuario en el formulario con nombre post
echo"<br><br>";
echo $_POST['pass'];

$Usuario= $_POST['usuario']; //declaracion de variable
$contraseña= $_POST['pass'];

echo "<br><br>".$Usuario."<br>"; //impresion de una variable
echo "<br>".$contraseña."<br>";

?>