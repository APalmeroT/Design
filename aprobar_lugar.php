<?php
    require 'conexion_bd.php';

    $id = $_GET['id'];

    $query = "UPDATE lugares SET aprobado = 1 WHERE id = $id";

    mysqli_query($conexion, $query);
    echo "<script>alert('Lugar aprobado con éxito.')</script>";
    header( "Refresh:1; url=http://167.71.185.28/pendientes.php");
?>