<?php

include("conexion.php");

$consulta = "SELECT * FROM Libro";
$ejecutar = sqlsrv_query($conn, $consulta);
echo "<H2> CRUD PHP Y SQLSERVER </H2>";
echo "<H3> INSERCION, EDICION Y ELIMINACION DE ESTUDIANTES";
echo "<br><br>";

echo "<table border =  '1'>
        <tr>
            <td>Id Estudiante</td>
            <td>Documento de identidad</td>
            <td>Nombre Estudiante</td>
            <td>Direccion Estudiante</td>
        </tr>";

while($fila = sqlsrv_fetch_array($ejecutar))
{
    $id = $fila['idLibro'];
    echo "<tr>";
        echo "<td>".$fila['idLibro']."</td>";
        echo "<td>".$fila['Titulo']."</td>";
        echo "<td>".$fila['idEditorial']."</td>";
        echo "<td>".$fila['Area']."</td>";
        echo "<td><a href = 'editar.php?editar=$id'> Editar Informacion </a></td>";
        echo "<td><a href = 'eliminar.php?eliminar=$id'> Eliminar Estudiante </a></td>";
    echo "</tr>";
}

echo "</table>";
echo "<br><br>";
echo "<a href = 'insertar.php'> Insertar Estudiante </a>";

?>