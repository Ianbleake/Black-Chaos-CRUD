<!DOCTYPE html5>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/Ownpage.css">
    <link rel="shortcut icon" href="../../Media/owl.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Administracion</title>
</head>

<body>
    <div id="declaracion">
            <?php
                include('test.php');
            ?>
    </div>
    
    <header class="<?php echo $headerClass; ?>">
        <a href="../ownpage.php">
            <div id="Logo">
                <h1>BlackChaos</h1>
                <img src="../../Media/owl.png" alt="Logo">
            </div>
        </a>

        <div id="conexion">
            <?php
                include('Conexion.php');
            ?>
        </div>

    </header>

    <aside>
        <ul>
            <li><a href="../regprod.php" class="myButton">Registro de productos</a></li>
            <li><a href="../lisprod.php" class="myButton">Listado de productos</a></li>
            <li><a href="../RegUser.php" class="myButton">Usuarios registrados</a></li>
            <li><a href="../Trabajadores.php" class="myButton">Trabajadores en nomina</a></li>
            <li><a href="../Regtrabaja.php" class="myButton">Registro de Trabajadores</a></li>
        </ul>

    </aside>

    <main>
    <?php

$sku = $_POST['SKU'];

$consulta_productos="select sku,producto,precio from productos where sku='$sku'";
$resultado_productos=odbc_exec($link2,$consulta_productos);

echo"

<table border='1px' bordercolor='#0099CC' width='100%' >
<tr>

<td>
SKU
</td>

<td>
Producto
</td>

<td>
Precio
</td>

<td>
</td>

<td>
</td>

</tr>";

while($row = odbc_fetch_array($resultado_productos))
{
    echo "

    <tr>
    <td>".$row['sku'].
    "</td>

    
    <td>".$row['producto'].
    "</td>

    <td>".$row['precio'].
    "</td>

    <td>
    <a href='borrarprod.php?name=$sku'>Delete</a> 
    </td>

    <td>
    <a href='updateprod.php?actualizar=$sku'>Update</a>
    </td>

    </tr>";
    
}

echo "</table>";

?>
    </main>
</body>

</html>