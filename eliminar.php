<?php
    include("conexion.php");

    if(isset($_GET['eliminar']))
    {
        $editar_id = $_GET['eliminar'];
        
        $eliminar = "DELETE FROM Estudiante WHERE idLector = '$editar_id'";
        $ejecutar = sqlsrv_query($conn, $eliminar);
        if($eliminar)
        {
            echo "Estudiante eliminado";
        }
        else
        {
            die(print_r(sqlsrv_errors(), true));
        }
    }
    echo "<br><br>";
    echo "<a href='estudiantes.php'> Ver Estudiantes </a>";
?>