<?php
	include("conexion.php");

    $idestudiante = $_POST['idestudiante'];
    $documento = $_POST['documento'];
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
    $carrera = $_POST['carrera'];
    $edad = $_POST['edad'];

	$actualizar = "UPDATE Estudiante SET CI = '$documento', Nombre = '$nombre', Direccion = '$direccion', idCarrera = '$carrera',
                    Edad = '$edad' WHERE idLector = '$idestudiante'";
    $resultado = sqlsrv_query($conn, $actualizar);
    if(!$resultado)
    {
        echo "Error: No se pudo actualizar el estudiante.";
    }
    else
    {
        echo "<br><br>";
        echo "Se actualizaron los datos con exito";
    }
    echo "<br><br>";
    echo "<a href='estudiantes.php'> Ver Estudiantes </a>";
?>