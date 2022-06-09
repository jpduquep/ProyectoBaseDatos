<title>Estudiantes</title>
<?php

include("conexion.php");

$consulta = "SELECT * FROM Estudiante";
$ejecutar = sqlsrv_query($conn, $consulta);
echo "<H2> CRUD PHP Y SQLSERVER </H2>";
echo "<H3> INSERCIÓN, LECTURA, EDICIÓN Y ELIMINACIÓN DE ESTUDIANTES";
echo "<br><br>";

echo "<center>";
    echo "<table border =  '1'>
        <tr>
            <td><h3>Id Estudiante</h3></td>
            <td><h3>Documento de identidad</h3></td>
            <td><h3>Nombre Estudiante</h3></td>
            <td><h3>Dirección Estudiante</h3></td>
            <td><h3>Carrera Estudiante</h3></td>
            <td><h3>Edad Estudiante</h3></td>
        </tr>";

while($fila = sqlsrv_fetch_array($ejecutar))
{
    $id = $fila['idLector'];
    echo "<tr>";
        echo "<td>".$fila['idLector']."</td>";
        echo "<td>".$fila['CI']."</td>";
        echo "<td>".$fila['Nombre']."</td>";
        echo "<td>".$fila['Direccion']."</td>";
        echo "<td>".$fila['idCarrera']."</td>";
        echo "<td>".$fila['Edad']."</td>";
        echo "<td><a href = 'editar.php?editar=$id'> Editar Información </a></td>";
        echo "<td><a href = 'eliminar.php?eliminar=$id'> Eliminar Estudiante </a></td>";
    echo "</tr>";
}

    echo "</table>";
echo "</center";

echo "<br><br>";
echo "<form action='insertar.php'>";
echo "<input type='submit' name='insertar' value='Insertar Estudiante' style='margin-left: -200px; margin-top: 0px; '>";
echo "</form>";

echo "<br>";
echo "<form action='carreras.php'>";
echo "<input type='submit' name='carreras' value='Ver Carrera del Estudiante' style='margin-left: 200px; margin-top: -63px; '>";
echo "</form>";

echo "<form action='index.php'>";
echo "<center><input type='submit' name='index' value='Volver al inicio'></center>";
echo "</form>";

?>