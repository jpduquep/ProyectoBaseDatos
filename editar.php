<?php
    include("conexion.php");

    if(isset($_GET['editar']))
    {
        $editar_id = $_GET['editar'];
        
        $consulta = "SELECT * FROM Estudiante WHERE idLector = '$editar_id'";
        $ejecutar = sqlsrv_query($conn, $consulta);
?>
    <form method="POST" action="edit.php">
    <?php
        $fila = sqlsrv_fetch_array($ejecutar);
        echo "<br><br>";
        echo "Documento : <input type='text' name='documento' value=' ".$fila['CI']."'> <br><br>";
        echo "Nombre : <input type='text' name='nombre' value='".$fila['Nombre']."'> <br><br>";
        echo "Direccion : <input type='text' name='direccion' value='".$fila['Direccion']."'> <br><br>";
        echo "Carrera : <input type='number' name='carrera' value='".$fila['idCarrera']."' min='1' max='11'> <br><br>";
        echo "Edad : <input type='number' name='edad' value='".$fila['Edad']."' min='15' max='110'> <br><br>";
        echo "<input type='hidden' name='idestudiante' value='".$editar_id."' > <br><br>";
    ?>
    <input type="submit" name="Enviar" value="Enviar Datos">
    </form>
<?php } ?>