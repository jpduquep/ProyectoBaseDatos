<title>Prestamos</title>
<?php

include("conexion.php");

$consulta = "SELECT * FROM Prestamo";
$ejecutar = sqlsrv_query($conn, $consulta);
echo "<H2> PHP Y SQLSERVER PARA PRESTAMOS</H2>";
echo "<br><br>";

echo "<center>";
    echo "<table border =  '1'>
        <tr>
            <td>Id Prestamo</td>
            <td>Fecha del Prestamo</td>
            <td>Fecha de Vencimiento del Prestamo</td>
            <td>Fecha de Devolución del Libro</td>
            <td>ID del Estudiante</td>
            <td>ID del Libro</td>
            <td>Fecha del Pago de la Multa</td>
            <td>Dias de Retraso</td>
            <td>Valor de la Multa</td>
        </tr>";

while($fila = sqlsrv_fetch_array($ejecutar))
{
    $id = $fila['idPrestamo'];
    echo "<tr>";
        echo "<td>".$fila['idPrestamo']."</td>";
        echo "<td>".date_format($fila['fecha_prestamo'], 'd/m/y')."</td>";
        if(is_null($fila['fecha_vencimiento_prestamo']))
        {
            echo "<td>  </td>";
        }
        else
        {
            echo "<td>".date_format($fila['fecha_vencimiento_prestamo'],'d/m/Y')."</td>";
        }

        if(is_null($fila['fecha_devolucion']))
        {
            echo "<td>  </td>";
        }
        else
        {
            echo "<td>".date_format($fila['fecha_devolucion'],'d/m/Y')."</td>";
        }

        echo "<td>".$fila['idLector']."</td>";
        echo "<td>".$fila['idLibro']."</td>";
        if(is_null($fila['fechaPagoMulta']))
        {
            echo "<td>  </td>";
        }
        else
        {
            echo "<td>".date_format($fila['fechaPagoMulta'],'d/m/Y')."</td>";
        }
        echo "<td>".$fila['diasRetraso']."</td>";
        echo "<td>".$fila['valorMulta']."</td>";
        echo "<td><a href = 'editarPrestamo.php?editar=$id'> Editar Prestamo </a></td>";
    echo "</tr>";
}

    echo "</table>";
echo "</center";

echo "<br><br>";
echo "<br><br>";
echo "<form action='insertarPrestamo.php'>";
echo "<input type='submit' name='insertar' value='Insertar Préstamo' style='margin-left: -1100px; margin-top: 0px; '>";
echo "</form>";

echo "<br><br>";
echo "<form action='areasLibros.php'>";
echo "<input type='submit' name='areas' value='Áreas que necesitan libros' style='margin-left: -700px; margin-top: -75px; '>";
echo "</form>";

echo "<br><br>";
echo "<form action='fechaDevolucion.php'>";
echo "<input type='submit' name='insertar' value='Fecha de devolución de libros' style='margin-left: -250px; margin-top: -128px; '>";
echo "</form>";

echo "<br><br>";
echo "<form action='estudiantesLibros.php'>";
echo "<input type='submit' name='insertar' value='Estudiantes con mas préstamos' style='margin-left: 250px; margin-top: -181px; '>";
echo "</form>";

echo "<br><br>";
echo "<form action='cantidadMultas.php'>";
echo "<input type='submit' name='insertar' value='Cantidad de multas' style='margin-left: 700px; margin-top: -234px; '>";
echo "</form>";

echo "<br><br>";
echo "<form action='fechasPago.php'>";
echo "<input type='submit' name='insertar' value='Fecha de pago de multas' style='margin-left: 1100px; margin-top: -287px; '>";
echo "</form>";

echo "<br><br>";
echo "<form action='editoriales.php'>";
echo "<input type='submit' name='insertar' value='Información de editoriales' style=' margin-top: -280px; '>";
echo "</form>";

echo "<form action='index.php'>";
echo "<center><input type='submit' name='index' value='Volver al inicio' style='margin-top: -200px; '></center>";
echo "</form>";

?>