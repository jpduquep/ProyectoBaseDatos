<title>Estudiantes con más Préstamos</title>
<?php

include("conexion.php");

$consulta = "SELECT ltrim(upper(e.Nombre)) as Nombre_Estudiante, count(*) as Cantidad_Prestamos
            FROM Prestamo AS p,
                Estudiante AS e
            WHERE p.idLector = e.idLector 
            GROUP BY e.Nombre
            ORDER BY 2 desc,1";
$ejecutar = sqlsrv_query($conn, $consulta);
echo "<center><H2> Estudiantes con más Préstamos </H2></center>";
echo "<br><br>";

echo "<center>";
    echo "<table border =  '1'>
        <tr>
            <td><h3>Nombre del Estudiante</h3></td>
            <td><h3>Cantidad de Préstamos</h3></td>
        </tr>";

while($fila = sqlsrv_fetch_array($ejecutar))
{
    echo "<tr>";
        echo "<td>".$fila['Nombre_Estudiante']."</td>";
        echo "<td>".$fila['Cantidad_Prestamos']."</td>";
    echo "</tr>";
}

    echo "</table>";
echo "</center";

?>
<br><br>
<form action="prestamos.php">
    <center><input type="submit" value="Ver Prestamos" style="margin-top: 50px;" ></center>
</form>