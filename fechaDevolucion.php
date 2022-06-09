<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha de Devolución</title>
</head>
<body>
    <?php
        include("conexion.php");
    ?>
    <form method="POST" action="">
        <label>Nombre del Libro: </label>
        <input type="text" name="buscarLibro">
        <input type="submit" name="buscar" value="Buscar Libro" style="margin-left: 20px;">
    </form>
    <br><br>
</body>
</html>
<?php
    if(isset($_POST['buscar']))
    {
        $nombre = $_POST['buscarLibro'];
        $consulta = "SELECT l.Titulo, p.fecha_devolucion 
                    FROM Libro as l
                    JOIN Prestamo as p
                    ON l.idLibro = p.idLibro and l.Titulo LIKE LOWER('%$nombre%') and p.fecha_devolucion >= p.fecha_prestamo";
        $ejecutar = sqlsrv_query($conn, $consulta);

        echo "<table border = '1'>
        <tr>
            <td><h3>Nombre Libro</h3></td>
            <td><h3>Fecha de devolución</h3></td>
        </tr>";

        while($fila = sqlsrv_fetch_array($ejecutar))
        {
            echo "<tr>";
                echo "<td>".$fila['Titulo']."</td>";
                echo "<td>".date_format($fila['fecha_devolucion'],'d/m/Y')."</td>";
            echo "</tr>";
        }
    }
?>
<form action='prestamos.php'>
    <center><input type='submit' name='index' value='Ver Prestamos'></center>
</form>