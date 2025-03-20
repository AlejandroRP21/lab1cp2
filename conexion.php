<?php
    $conexion = mysqli_connect("localhost", "root", "", "gorrassv"); 
    if(mysqli_connect_errno()){
        echo "Error: " . mysqli_connect_error();
    } else {
        /* echo "Conexión realizada exitosamente"; */
    }
?>
