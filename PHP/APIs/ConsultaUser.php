<?php

$consulta_empleados="select id, primernombre+' '+segundonombre+' '+primerapellido+' '+segundoapellido as Nombre,correo,username,pass from users";
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
Username
</td>

<td>
Contraseña
</td>

<td>
</td>

<td>
</td>

</tr>";

while($row = odbc_fetch_array($resultado_empleados))
{
    $username=$row['username'];

    echo "

    <tr>
    <td>".$row['id'].
    "</td>

    
    <td>".$row['Nombre'].
    "</td>

    <td>".$row['correo'].
    "</td>

    <td>".$row['username'].
    "</td>

    <td>".$row['pass'].
    "</td>

    <td>
        <a href='APIs/borraruser.php?name=$username'>Delete</a> 
    </td>

    <td>
        <a href='APIs/updateuser.php?actualizar=$username'>Update</a>  
    </td>

    </tr>";
    
}

echo "</table>";

?>