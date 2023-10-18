<!DOCTYPE html5>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/Ownpage.css">
    <link rel="stylesheet" href="../../CSS/formt.css">
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

        $consulta_trabajadores="select id,primernombre,segundonombre,primerapellido,segundoapellido,correo,telefono,puesto,salario from trabajadores where id='$elemento'";
        $resultado_trabajadores=odbc_exec($link2,$consulta_trabajadores);

        while($row = odbc_fetch_array($resultado_trabajadores))
        {
            $oldname1=$row['primernombre'];
            $oldname2=$row['segundonombre'];
            $oldlast1=$row['primerapellido'];
            $oldlast2=$row['segundoapellido'];
            $oldcorreo=$row['correo'];
            $oldtelefono=$row['telefono'];
            $oldpuesto=$row['puesto'];
            $oldsalario=$row['salario'];
        }
        echo"
        <form action='procesaupdatetrab.php' method='post' class='regform'>

            <div class='ord'>
                <label for='name'>Primer Nombre:</label>
                <input type='text' name='1name' class='css-inputt' value='$oldname1'>
            </div>


            <div class='ord'>
                <label for='2name'>Segundo Nombre:</label>
                <input type='text' name='2name' class='css-inputt' value='$oldname2'>
            </div>

            <div class='ord'>

                <label for='apellido1'>Primer Apellido:</label>
                <input type='text' name='apellido1' class='css-inputt' value='$oldlast1'>
            </div>


            <div class='ord'>
                <label for='apellido2'>Segundo Apellido:</label>
                <input type='text' name='apellido2' class='css-inputt' value='$oldlast2'>
            </div>

            <div class='ord'>
                <label for='correo'>Correo:</label>
                <input type='text' name='correo' class='css-inputt' value='$oldcorreo'>
            </div>

            <div class='ord'>
                <label for='telefono'>Telefono:</label>
                <input type='text' name='telefono' class='css-inputt' value='$oldtelefono'>
            </div>

            <div class='ord'>
                <label for='puesto'>Puesto:</label>
                <input type='text' name='puesto' class='css-inputt' value='$oldpuesto'>
            </div>

            <div class='ord'>
                <label for='sueldo'>Sueldo:</label>
                <input type='text' name='sueldo' class='css-inputt' value='$oldsalario'>
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