<!DOCTYPE html5>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>

<body>

    <?php

include('conexion.php');


?>
    <table border="1px" bordercolor="#0099CC" >
        <form action="Recibe_datos.php" method="post">

            <tr>
                <td><label for="SKU">SKU:</label></td>
                <td><input type="number" name="SKU"></td>
            </tr>

            <tr>
                <td><label for="producto">Producto:</label></td>
                <td><input type="text" name="producto"></td>
            </tr>

            <tr>
                <td><label for="precio">Precio:</label></td>
                <td><input type="number" name="precio"></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit">Guardar</button></td>
            </tr>

        </form>
    </table>


</body>

</html>