<?php
    require 'conexion_bd.php';

    $id = $_GET['id'];
    $ref = $_GET['ref'];

    $query = "DELETE FROM lugares WHERE id = $id";

    mysqli_query($conexion, $query);
    echo "<script>alert('Lugar eliminado con éxito.')</script>";

    if ($ref == 1) {
        header( "Refresh:1; url=http://167.71.185.28/aprobados.php");
    }else{
        header( "Refresh:1; url=http://167.71.185.28/pendientes.php");
    }

?>