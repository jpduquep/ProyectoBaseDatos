<?php
    include("conexion.php");

    $idprestamo = $_POST['idprestamo'];
    $idlector = $_POST['idestudiante'];
    $idlibro = $_POST['idlibro'];

    $insertar = "INSERT INTO Prestamo(idPrestamo, fecha_prestamo, fecha_vencimiento_prestamo, idLector, idLibro) 
                values ('$idprestamo', GETDATE(), DATEADD(day, 14, GETDATE()), '$idlector', '$idlibro')";
    $ejecutar = sqlsrv_query($conn, $insertar);

    if($ejecutar)
    {
        header("location:prestamos.php");
    }
    else
    {
        die(print_r(sqlsrv_errors(), true));
        echo "<td><a href = 'insertar.php'> Insertar otro Estudiante </a></td>";
    }
?>