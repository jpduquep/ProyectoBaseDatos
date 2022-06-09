<?php
    $servername = "DESKTOP-CHH6JP9\SQLEXPRESS";
    $connectionInfo = array("Database"=>"RETO", "UID"=>"soporte", "PWD"=>"123");
    $conn = sqlsrv_connect($servername, $connectionInfo);

    if($conn)
    {
        echo "";
    }
    else
    {
        echo "No se pudo establecer la conexión";
        die(print_r(sqlsrv_errors(), true));
    }
?>