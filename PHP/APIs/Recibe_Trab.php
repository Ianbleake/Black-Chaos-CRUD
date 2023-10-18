    <?php
    include('Conexion.php');

    $consulta_empleados="select id from trabajadores";
    $resultado_empleados=odbc_exec($link2,$consulta_empleados);

    $datos = odbc_fetch_array($resultado_empleados);

    while($row = odbc_fetch_array($resultado_empleados))
    {
        $ultimoDato = $row['id'];
    }

    $ultimoDato++;
    
    $id = $ultimoDato;
    $name1 = $_POST['1name'];
    $name2 = $_POST['2name'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $puesto = $_POST['puesto'];
    $sueldo = $_POST['sueldo'];

    $inserta_trabajador = "insert into trabajadores values($id,'$name1','$name2','$apellido1','$apellido2','$correo','$telefono','$puesto','$sueldo')";
    

        odbc_exec($link2,$inserta_trabajador);

        header("Location: ../trabajadores.php");
        exit();

    ?>