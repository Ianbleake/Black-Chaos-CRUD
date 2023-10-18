<?php

$consulta_empleados="select id, primernombre+' '+segundonombre+' '+primerapellido+' '+segundoapellido as Nombre,correo,telefono,puesto,salario from trabajadores";
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

    $id=$row['id'];

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
        <a href='APIs/borrartrab.php?name=$id'>Delete</a> 
    </td>

    <td>
        <a href='APIs/updatetrab.php?actualizar=$id'>Update</a> 
    </td>

    </tr>";
    
}

echo "</table>";

?>