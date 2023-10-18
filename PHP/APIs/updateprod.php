<!DOCTYPE html5>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/Ownpage.css">
    <link rel="stylesheet" href="../../CSS/form.css">
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
        $elemento = $_GET['actualizar'];

        $consulta_productos="select sku,producto,precio from productos where sku='$elemento'";
        $resultado_productos=odbc_exec($link2,$consulta_productos);

        while($row = odbc_fetch_array($resultado_productos))
        {
            $oldsku=$row['sku'];
            $oldproduct=$row['producto'];
            $oldprecio=$row['precio'];
        }

        echo"
        <form action='procesaupdateprod.php' method='post' class='regform' name='productos'>

            <div class='ord'>
                <label for='SKU'>SKU:</label>
                <input type='text' name='SKU' class='css-input' value='$oldsku'>
            </div>


            <div class='ord'>
                <label for='producto'>Producto:</label>
                <input type='text' name='producto' class='css-input' value='$oldproduct'>
            </div>

            <div class='ord'>

                <label for='precio'>Precio:</label>
                <input type='text' name='precio' class='css-input' value='$oldprecio'>
                <input type='text' name='actualizar' value='$elemento' hidden></input>
            </div>

            <div class='ord'>
                <button type='submit' class='myButtonf'>Guardar</button>
            </div>
        </form>";
        ?>
    </main>
</body>

</html>