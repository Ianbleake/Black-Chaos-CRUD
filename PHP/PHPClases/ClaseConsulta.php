<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include('Conexion.php');

    $consulta_empleados="select Usuario, pass from users";
    $resultado_empleados=odbc_exec($link2,$consulta_empleados);

    echo "
    <table border='1' bordercolor='#696969' width='100%'>
        <tr>
            <td>
                NOMBRE
            </td>
            <td>
                CONTRASEÑA
            </td>
            <td>
                ID DE USUARIO
            </td>
        </tr>";

        while($row = odbc_fetch_array($resultado_empleados))
        {
            echo "
            <tr>
                <td>
                    
                </td>
                <td>
                    ".$row['Usuario'].
                "</td>
                <td>
                    ".$row['pass'].
                "</td>
            </tr>";
        }

        echo"
    </table>";
    ?>
</body>
</html>