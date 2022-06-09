<title>Areas que no tienen libros</title>
<?php

include("conexion.php");

$consulta = "SELECT a.DESCRIPCION_AREA as Nombre_Area, count(l.Area) as Cantidad_Libros
            FROM Areas AS a
            LEFT JOIN Libro AS l
            ON a.AREA = l.Area
            GROUP BY DESCRIPCION_AREA
            HAVING count(l.Area) = 0";
$ejecutar = sqlsrv_query($conn, $consulta);
echo "<center><H2> Áreas que no tienen libros </H2></center>";
echo "<br><br>";

echo "<center>";
    echo "<table border =  '1'>
        <tr>
            <td><h3>Nombre del Área</h3></td>
            <td><h3>Cantidad de Libros</h3></td>
        </tr>";

while($fila = sqlsrv_fetch_array($ejecutar))
{
    echo "<tr>";
        echo "<td>".$fila['Nombre_Area']."</td>";
        echo "<td>".$fila['Cantidad_Libros']."</td>";
    echo "</tr>";
}

    echo "</table>";
echo "</center";

?>
<br><br>
<form action="prestamos.php">
    <center><input type="submit" value="Ver Prestamos" style="margin-top: 50px;" ></center>
</form>