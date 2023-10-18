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
    
    $id = $_POST['ID'];
    
    $consulta_empleados="select id, primernombre+' '+segundonombre+' '+primerapellido+' '+segundoapellido as Nombre,correo,telefono,puesto,salario from trabajadores where id='$id'";
    $resultado_empleados=odbc_exec($link2,$consulta_empleados);
    
    echo"
    
    <table border='1px' bordercolor='#0099CC' width='100%' >
    <tr>
    
    <td>
    ID
    </td>
    
    <td>
    Nombre
    </td>
    
    <td>
    Correo
    </td>
    
    <td>
    Telefono
    </td>
    
    <td>
    Puesto
    </td>
    
    <td>
    Sueldo
    </td>
    
    <td>
    </td>
    
    <td>
    </td>
    
    </tr>";
    
    while($row = odbc_fetch_array($resultado_empleados))
    {
        echo "
    
        <tr>
        <td>".$row['id'].
        "</td>
    
        
        <td>".$row['Nombre'].
        "</td>
    
        <td>".$row['correo'].
        "</td>
    
        <td>".$row['telefono'].
        "</td>
    
        <td>".$row['puesto'].
        "</td>
    
        <td>".$row['salario'].
        "</td>
    
        <td>
        <a href='borrartrab.php?name=$id'>Delete</a>
        </td>
    
        <td>
        <a href='updatetrab.php?actualizar=$id'>Update</a>  
        </td>
    
        </tr>";
        
    }
    
    echo "</table>";
    
    ?>
    </main>
</body>

</html>