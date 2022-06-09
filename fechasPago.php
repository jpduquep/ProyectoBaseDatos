<title>Fecha del Pago de la Multa</title>
<?php

include("conexion.php");

$consulta = "SELECT p.idPrestamo, e.Nombre, p.fechaPagoMulta 
            FROM Prestamo as p
            JOIN Estudiante as e
            ON p.idLector = e.idLector
            JOIN Libro as l
            ON l.idLibro = p.idLibro and p.fecha_devolucion > p.fecha_vencimiento_prestamo";
$ejecutar = sqlsrv_query($conn, $consulta);
echo "<center><H2> Fecha del Pago de la Multa </H2></center>";
echo "<br><br>";

echo "<center>";
    echo "<table border =  '1'>
        <tr>
            <td><h3>ID del Préstamo</h3></td>
            <td><h3>Nombre del Estudiante</h3></td>
            <td><h3>Fecha del Pago de la Multa</h3></td>
        </tr>";

while($fila = sqlsrv_fetch_array($ejecutar))
{
    echo "<tr>";
        echo "<td>".$fila['idPrestamo']."</td>";
        echo "<td>".$fila['Nombre']."</td>";
        echo "<td>".date_format($fila['fechaPagoMulta'],'d/m/Y')."</td>";
    echo "</tr>";
}

    echo "</table>";
echo "</center";

?>
<br><br>
<form action="prestamos.php">
    <center><input type="submit" value="Ver Prestamos" style="margin-top: 50px;" ></center>
</form>