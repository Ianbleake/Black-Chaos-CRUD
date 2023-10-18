<!DOCTYPE html5>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Ownpage.css">
    <link rel="shortcut icon" href="../Media/owl.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Productos</title>
</head>

<body>
    <div id="declaracion">
             <?php
                include('APIs/test.php');
            ?>
    </div>
    
    <header class="<?php echo $headerClass; ?>">
        <a href="../index.html">
            <div id="Logo">
                <h1>BlackChaos</h1>
                <img src="../Media/owl.png" alt="Logo">
            </div>
        </a>

        <div id="conexion">
            <?php
                include('APIs/Conexion.php');
            ?>

        </div>

    </header>

    <aside>
        <ul>
            <li><a href="regprod.php" class="myButton">Registro de productos</a></li>
            <li><a href="ownpage.php" class="myButton">Administrador</a></li>
            <li><a href="reguser.php" class="myButton">Usuarios registrados</a></li>
            <li><a href="trabajadores.php" class="myButton">Trabajadores en nomina</a></li>
            <li><a href="regtrabaja.php" class="myButton">Registro de Trabajadores</a></li>
        </ul>

    </aside>

    <main>
        <?php
        include('APIs/consultaprod.php');
        ?>
    </main>
</body>

</html>