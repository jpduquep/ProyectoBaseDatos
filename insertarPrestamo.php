<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>
<body>
    <form method="POST" action="insertPres.php">
        <H3>Insertar Estudiantes</H3>
            ID Prestamo : <input type="text" name="idprestamo">
            <br><br>
            ID del Estudiante : <input type="number" name="idestudiante">
            <br><br>
            ID del Libro : <input type="number" name="idlibro">
            <br><br>
            <input type="submit" name="enviar" value="Insertar">
    </form>
    <form action="prestamos.php">
        <td><input type="submit" value="Ver Prestamos" style="margin-top: 20px;" ></td>
    </form>
</body>
</html>