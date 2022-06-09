<title>Cantidad de Multas Existentes</title>
<?php

include("conexion.php");

$consulta = "SELECT count(*) Cantidad_De_Multas_Existentes
            FROM (SELECT ltrim(upper(e.Nombre)) as Nombre_Estudiante, count(*) as Cantidad_Prestamos
            FROM Prestamo AS p,
                Estudiante AS e
            WHERE p.idLector = e.idLector and p.valorMulta > 0
            GROUP BY e.Nombre) as lib";
$ejecutar = sqlsrv_query($conn, $consulta);
echo "<H2> Áreas que no tienen libros </H2>";
echo "<br><br>";

echo "<center>";
    echo "<table border =  '1'>
        <tr>
            <td><h3>Cantidad de Multas Existentes</h3></td>
        </tr>";

while($fila = sqlsrv_fetch_array($ejecutar))
{
    echo "<tr>";
        echo "<td>".$fila['Cantidad_De_Multas_Existentes']."</td>";
    echo "</tr>";
}

    echo "</table>";
echo "</center";

?>
<br><br>
<form action="prestamos.php">
    <center><input type="submit" value="Ver Prestamos" style="margin-top: 50px;" ></center>
</form>