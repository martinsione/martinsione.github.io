<?php

    // Incluye los datos para la conexion
    include 'conexion.php';
    

    // Conexion a la db
    $conexion = mysqli_connect($server, $user, $passwd, $db) or die('Hubo un error en la conexion a la db');
    

    // Consultas
    $query = "INSERT INTO form VALUES(0, '$name', '$email', '$message')";


    // Accion de la consulta
    $consulta = mysqli_query($conexion, $query) or die('Hubo un error en la consulta');


    // Cierre de la conexion
    mysqli_close($conexion);
?>