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

        $consulta_empleados="select primernombre,segundonombre,primerapellido,segundoapellido,correo,username,pass from users where username='$elemento'";
        $resultado_empleados=odbc_exec($link2,$consulta_empleados);

        while($row = odbc_fetch_array($resultado_empleados))
        {
            $oldname1=$row['primernombre'];
            $oldname2=$row['segundonombre'];
            $oldlast1=$row['primerapellido'];
            $oldlast2=$row['segundoapellido'];
            $oldcorreo=$row['correo'];
            $olduser=$row['username'];
            $oldpass=$row['pass'];
            
        }
        echo"
        <form action='procesaupdateuser.php' method='post'  class='regform'>

            <div class='ord'>
                <h1>Registro de Usuario</h1>
            </div>

            <div class='ord'>
                <label for='name'>Primer Nombre:</label>
                <input type='text' name='name' id='name' class='in' class='css-inputt' value='$oldname1'>
            </div>

            <div class='ord'>
                <label for='name2'>Segundo Nombre:</label>
                <input type='text' name='name2' id='name2' class='in' class='css-inputt' value='$oldname2'>
            </div>

            <div class='ord'>
                <label for='lastname'>Primer Apellido:</label>
                <input type='text' name='lastname' id='lastname' class='in' class='css-inputt' value='$oldlast1'>
            </div>

            <div class='ord'>
                <label for='lastname2'>Segundo Apellido:</label>
                <input type='text' name='lastname2' id='lastname2' class='in' class='css-inputt' value='$oldlast2'>
            </div>

            <div class='ord'>
                <label for='name'>Correo:</label>
                <input type='email' name='mail' id='mail' class='in' class='css-inputt' value='$oldcorreo'>
            </div>

            <div class='ord'>
                <label for='user'>Username:</label>
                <input type='text' name='user' id='user' class='in' class='css-inputt' value='$olduser'>
            </div>

            <div class='ord'>
                <label for='pass'>Contraseña:</label>
                <input type='password' name='pass' id='pass' class='in' class='css-inputt' value='$oldpass'>
                <input type='text' name='actualizar' value='$elemento' hidden></input>
            </div>

            <div class='ord'>
                <button type='submit' class='myButtonf'>Registrar</button>
            </div>

        </form>";
        ?>
    </main>
</body>

</html>