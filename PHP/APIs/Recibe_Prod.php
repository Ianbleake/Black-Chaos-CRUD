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
    include('conexion.php');
    
    $sku = $_POST['SKU'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $foto = $_POST['foto'];
    $inserta_producto = "insert into productos values('$sku','$producto','$precio','$foto')";
    
    echo "<br><br>
        ¡Registro Exitoso!
        <br><br>Producto registrado:<br> 
        SKU: $sku 
        <br> 
        Procuto: $producto
        <br>
        precio: $precio
        <br>
        foto: $foto

        ";

        odbc_exec($link2,$inserta_producto);

        header("Location: ../lisprod.php");
        exit();

    ?>
</body>