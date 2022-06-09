<?php
    include("conexion.php");

    $idlector = $_POST['idlector'];
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $carrera = $_POST['carrera'];
    $edad = $_POST['edad'];

    $insertar = "INSERT INTO Estudiante (idLector, CI, Nombre, Direccion, idCarrera, Edad) VALUES ('$idlector', '$documento', 
                                                                                                    '$nombre', '$direccion', 
                                                                                                    '$carrera', '$edad')";
    $ejecutar = sqlsrv_query($conn, $insertar);

    if($ejecutar)
    {
        header("location:estudiantes.php");
    }
    else
    {
        die(print_r(sqlsrv_errors(), true));
        echo "<td><a href = 'insertar.php'> Insertar otro Estudiante </a></td>";
    }
?>