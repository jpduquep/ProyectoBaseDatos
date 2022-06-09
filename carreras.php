<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carreras</title>
</head>
<body>
    <?php
        include("conexion.php");
    ?>
    <form method="POST" action="carreras.php">
        <label>Nombre del Estudiante: </label>
        <input type="text" name="buscarNombre">
        <input type="submit" name="buscar" value="Buscar Carrera" style="margin-left: 20px;">
    </form>
    <br><br>
</body>
</html>
<?php
    if(isset($_POST['buscar']))
    {
        $nombre = $_POST['buscarNombre'];
        $consulta2 = "  SELECT e.Nombre,c.NombreCarrera 
                        FROM Carrera as c
                        JOIN Estudiante as e
                        ON c.idCarrera = e.idCarrera and e.Nombre LIKE LOWER('%$nombre%')";

        $ejecutar = sqlsrv_query($conn, $consulta2);

        echo "<table border = '1'>
        <tr>
            <td><h3>Nombre Estudiante</h3></td>
            <td><h3>Carrera</h3></td>
        </tr>";

        while($fila = sqlsrv_fetch_array($ejecutar))
        {
            echo "<tr>";
                echo "<td>".$fila['Nombre']."</td>";
                echo "<td>".$fila['NombreCarrera']."</td>";
            echo "</tr>";
        }
    }
?>
<form action='estudiantes.php'>
    <center><input type='submit' name='index' value='Ver Estudiantes'></center>
</form>