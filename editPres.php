<?php
	include("conexion.php");

    $idprestamo = $_POST['idprestamo'];
    $fechaprestamo = $_POST['fechaprestamo'];
    $fechavencimientoprestamo = $_POST['fechavencimientoprestamo'];
	$fechadevolucion = $_POST['fechadevolucion'];
	$idLector = $_POST['idestudiante'];
    $idLibro = $_POST['idlibro'];
    $fechaPagoMulta = $_POST['fechapagomulta'];
    $diasRetraso = $_POST['diasretraso'];

	$actualizarPrestamos = "UPDATE Prestamo SET fecha_prestamo = '$fechaprestamo', fecha_vencimiento_prestamo = '$fechavencimientoprestamo',
                    fecha_devolucion = '$fechadevolucion', idLector = '$idLector', idLibro = '$idLibro', 
                    fechaPagoMulta = '$fechaPagoMulta', valorMulta = (diasRetraso*1000) 
                    WHERE idPrestamo = '$idprestamo'";

    $resultado = sqlsrv_query($conn, $actualizarPrestamos);
    if(!$resultado)
    { 
        die(print_r(sqlsrv_errors(), true));
    }
    else
    {
        echo "<br><br>";
        echo "Se actualizaron los datos con exito";
    }
    echo "<br><br>";
    echo "<a href='prestamos.php'> Ver Prestamos </a>";
?>