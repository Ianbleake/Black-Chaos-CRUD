<?php

$consulta_productos="select sku,producto,precio from productos";
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
    $sku = $row['sku'];
    echo "

    <tr>
    <td>".$row['sku'].
    "</td>

    
    <td>".$row['producto'].
    "</td>

    <td>".$row['precio'].
    "</td>

    <td>
        <a href='APIs/borrarprod.php?name=$sku'>Delete</a> 
    </td>

    <td>
        <a href='APIs/updateprod.php?actualizar=$sku'>Update</a>
    </td>

    </tr>";
    
}

echo "</table>";

?>