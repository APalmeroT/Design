<?php
    require 'conexion_bd.php';

    $target_path = "img/recomendados/";
    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
    $target_path_bd = "http://167.71.185.28/" . $target_path;

    if(isset($_POST['aceptar'])){
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
        $municipio = mysqli_real_escape_string($conexion, $_POST['municipio']);
        $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);

        $query = "INSERT INTO lugares VALUES (NULL, '$nombre', '$descripcion', '$target_path_bd', '$usuario' ,'$municipio', 0)";
        mysqli_query($conexion, $query);
        echo "<script>alert('Lugar agregado exitosamente')</script>";
        header('Location: exito.php');
    }
        
    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
        echo "<script>alert('Modificado exitosamente')</script>";
        header('Location: exito.php'); 
    }
?>