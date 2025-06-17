<?php
    $host = "db"; 
    $user = "usuario"; 
    $clave = "password"; 
    $bd = "ventasdb"; 

    $conexion = mysqli_connect($host, $user, $clave, $bd);

    if (mysqli_connect_errno()) {
        // echo "No se pudo conectar a la base de datos: " . mysqli_connect_error();
        exit();
    }

    mysqli_select_db($conexion, $bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion, "utf8");

