<?php
    require 'conexion_bd.php';

    $target_path = "img/fotos/";
    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
    $target_path_bd = "http://167.71.185.28/" . $target_path;

    if(isset($_POST['aceptar'])){
        $id = $_POST['id'];
        $actual = $_POST['actual'];

        $query = "UPDATE usuarios SET foto='$target_path_bd' WHERE id=$id";
        mysqli_query($conexion, $query);
        echo "<script>alert('Modificado exitosamente')</script>";
        header('Location: perfil.php');
    }

    $resta = substr($actual, 21);

    if (!unlink($resta)) { 
        echo ("$resta no se pudo eliminar la foto por un error."); 
    } 
    else { 
        echo ("$resta la foto ha sido eliminada.");
    } 

        
    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
        echo "<script>alert('Modificado exitosamente')</script>";
        header('Location: perfil.php');
    }
?>