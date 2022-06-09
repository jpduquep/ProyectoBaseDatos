<title>Información de las Editoriales</title>
<?php

include("conexion.php");

$consulta = "SELECT * FROM Editorial";
$ejecutar = sqlsrv_query($conn, $consulta);
echo "<center><H2> Información de las Editoriales </H2></center>";
echo "<br><br>";

echo "<center>";
    echo "<table border =  '1'>
        <tr>
            <td><h3>ID de la Editorial</h3></td>
            <td><h3>Nombre de la Editorial</h3></td>
        </tr>";

while($fila = sqlsrv_fetch_array($ejecutar))
{
    echo "<tr>";
        echo "<td>".$fila['idEditorial']."</td>";
        echo "<td>".$fila['NombreEditorial']."</td>";
    echo "</tr>";
}

    echo "</table>";
echo "</center";

?>
<br><br>
<form action="prestamos.php">
    <center><input type="submit" value="Ver Prestamos" style="margin-top: 50px;" ></center>
</form>