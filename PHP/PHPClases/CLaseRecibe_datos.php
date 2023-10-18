<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('Conexion.php');
    
    $sku = $_POST['SKU'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $inserta_producto = "insert into product values('$sku','$producto','$precio')";
    
    echo "<br><br>
        ¡Registro Exitoso!
        <br><br>El usuario ingresó:<br> 
        SKU: $sku 
        <br> 
        Procuto: $producto
        <br>
        precio: $precio
        ";

        odbc_exec($link2,$inserta_producto);

    ?>
</body>