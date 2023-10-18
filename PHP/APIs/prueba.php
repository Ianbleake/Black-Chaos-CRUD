<?php

include('Conexion.php');

    $consulta_usuario="select id from users";
    $resultado_usuario=odbc_exec($link2,$consulta_usuario);

    $datos = odbc_fetch_array($resultado_usuario);

    while($row = odbc_fetch_array($resultado_usuario))
    {
        $ultimoDato = $row['id'];
    }

    $ultimoDato++;
    

echo "<br><br>El último dato incrementado es: " . $ultimoDato;
?>