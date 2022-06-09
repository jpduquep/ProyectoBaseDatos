<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>
<body>
    <form method="POST" action="insert.php">
        <H3>Insertar Estudiantes</H3>
            ID Estudiante : <input type="number" name="idlector" min="1" max="99999">
            <br><br>
            Documento : <input type="text" name="documento">
            <br><br>
            Nombre :    <input type="text" name="nombre">
            <br><br>
            Direccion : <input type="text" name="direccion">
            <br><br>
            Carrera :   <input type="number" name="carrera" min="1" max="10">
            <br><br>
            Edad :      <input type="number" name="edad" min="15" max="110">
            <br>
            <br>
            <input type="submit" name="enviar" value="Insertar">
            <input type="reset" name="Reset" value="Limpiar">
    </form>
    <form action="estudiantes.php">
        <td><input type="submit" value="Ver Estudiantes" style="margin-top: 20px;" ></td>
    </form>
</body>
</html>