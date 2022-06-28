<?php
    require 'conexion_bd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png" />
    <title>TurisTam - Cambiar Foto</title>
</head>
<body>
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include 'includes/info-login-in.php';
            }else{
                include 'includes/info-login-in.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/info-login.php';
            }
        ?>

    <div class="wrapper">
        <div class="nav-fondo">
            <?php
                include 'includes/header-in.php'
            ?>
        </div>
        
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include 'includes/nav-admin.php';
            }else{
                include 'includes/nav-inicio.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/nav-inicio.php';
            }
        ?>

        <div class="container spacin perfil">
        <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
            <?php
                $username = $_SESSION['usuario'];
                $query = "SELECT * FROM usuarios WHERE usuario = '$username'";
                $resultado = mysqli_query($conexion, $query) or die('Error al ejectuar consulta');
                $fila = mysqli_fetch_row($resultado);
            ?>
            <img src="<?php echo $fila[6]; ?>" alt="" class="imagen_perfil">
        </div>

        <form action="foto_bd.php" method="POST" enctype="multipart/form-data" class="container spacing formulario">
            <div class="form_group">
                <input type="text" value="<?php echo $fila[6]; ?>" name="actual" required hidden>
            </div>
            <div class="form_group">
                <input type="number" value="<?php echo $fila[0]; ?>" name="id" required hidden>
            </div>
            <div class="from-group">
                <input type="file" name="uploadedfile" required>
            </div>
            <br>
            <div class="botones">
                <button type="submit" class="btn" name="aceptar">Cambiar Foto</button>
            </div>
        </form>

        <?php include 'includes/footer.php' ?>
    </div>
</body>
</html>