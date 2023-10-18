<?php
include('BDuser.php');
  $conexionExitosa = false; // Variable para almacenar el estado de la conexión

    ini_set('display_errors',0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);

  // Intentar establecer la conexión con la base de datos
  $conexion = $BDacces;

  // Verificar si la conexión fue exitosa
  if ($conexion) {
    $conexionExitosa = true;
    // Cerrar la conexión
  }

  // Determinar el estilo del header según el estado de la conexión
  $headerClass = $conexionExitosa ? 'green' : 'red';

?>

