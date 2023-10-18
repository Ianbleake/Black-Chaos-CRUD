    <?php
    include('Conexion.php');

    //BUG: no registra si solo hay un registro en la base de datos, posible causa la deteccion del id

    $consulta_empleados="select id from users";
    $resultado_empleados=odbc_exec($link2,$consulta_empleados);

    $datos = odbc_fetch_array($resultado_empleados);

    while($row = odbc_fetch_array($resultado_empleados))
    {
        $ultimoDato = $row['id'];
    }

    $ultimoDato++;
    
    $id = $ultimoDato;
    $name1 = $_POST['name'];
    $name2 = $_POST['name2'];
    $apellido1 = $_POST['lastname'];
    $apellido2 = $_POST['lastname2'];
    $correo = $_POST['mail'];
    $telefono = $_POST['user'];
    $puesto = $_POST['pass'];
    $sueldo = $_POST['confirm'];

    $inserta_trabajador = "insert into users values($id,'$name1','$name2','$apellido1','$apellido2','$correo','$telefono','$puesto')";
    

        odbc_exec($link2,$inserta_trabajador);

        header("Location: ../../index.html");
        exit();

    ?>