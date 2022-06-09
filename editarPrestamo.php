<?php
    include("conexion.php");

    if(isset($_GET['editar']))
    {
        $editar_id = $_GET['editar'];
        
        $consulta = "SELECT * FROM Prestamo WHERE idPrestamo = '$editar_id'";
        $ejecutar = sqlsrv_query($conn, $consulta);
?>
    <form method="POST" action="editPres.php">
    <?php
        $fila = sqlsrv_fetch_array($ejecutar);
        echo "<input type='hidden' name='idprestamo' value='".$editar_id."' > <br><br>";

        echo "Fecha de Prestamo : <input type='date' name='fechaprestamo' value='".date_format($fila['fecha_prestamo'],'d/m/Y')."' > <input type='text' name='fechaprestamo' value='".date_format($fila['fecha_prestamo'],'d/m/Y')."' disabled> <br><br>";

        echo "Fecha de Vencimiento del Prestamo : <input type='date' name='fechavencimientoprestamo' value='".date_format($fila['fecha_vencimiento_prestamo'],'d/m/Y')."' > <input type='text' name='fechavencimientoprestamo' value='".date_format($fila['fecha_vencimiento_prestamo'],'d/m/Y')."' disabled> <br><br>";

        if(is_null($fila['fecha_devolucion']))
        {
            echo "Fecha de Devolución del Libro : <input type='date' name='fechadevolucion' value='' > <br><br>";
        }
        else
        {
            echo "Fecha de Devolución del Libro : <input type='date' name='fechadevolucion' value='".date_format($fila['fecha_devolucion'],'d/m/Y')."' > <input type='text' name='fechadevolucion' value='".date_format($fila['fecha_devolucion'],'d/m/Y')."' disabled> SI LA FECHA DE DEVOLUCIÓN ES '01/01/1900' ES PORQUE EL LIBRO NO HA SIDO DEVULTO. <br><br>";
        }

        echo "ID del Estudiante : <input type='text' name='idestudiante' value='".$fila['idLector']."' readonly> <br><br>";

        echo "ID del Libro : <input type='text' name='idlibro' value='".$fila['idLibro']."' readonly> <br><br>";

        if(is_null($fila['fechaPagoMulta']))
        {
            echo "Fecha del Pago de la Multa : <input type='date' name='fechapagomulta' value='' > <br><br>";
        }
        else
        {   	
            echo "Fecha del pago de la Multa : <input type='date' name='fechapagomulta' value='".date_format($fila['fechaPagoMulta'],'d/m/Y')."' > <input type='date' name='fechapagomulta' value='".date_format($fila['fechaPagoMulta'],'d/m/Y')."' disabled> SI LA FECHA DE PAGO DE LA MULTA ES '01/01/1900' ES PORQUE EL LIBRO NO FUE ENTREGADO TARDE. <br><br>";
        }

        echo "Dias de Retraso : <input type='text' name='diasretraso' value='".$fila['diasRetraso']."' readonly>  <br><br>";

        echo "Valor de la Multa : <input type='text' name='valorMulta' value='".$fila['valorMulta']."' readonly> <br><br>";
    ?>
    <input type="submit" name="Enviar" value="Enviar Datos">
    </form>
<?php } ?>