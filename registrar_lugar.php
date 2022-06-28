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
    <title>TurisTam - Registrar Lugar</title>
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
                header('Location: login.php');
            }
        ?>
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
                header('Location: index.php');
            }else{
                include 'includes/nav-inicio.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/nav-inicio.php';
            }
    ?>

    <div class="wrapper" id="scrollear">
        <br>
        <div class="formulario">
            <form method="POST" action="agregar_bd.php" class="container spacing" enctype="multipart/form-data">
                <h1>Registrar Lugar</h1>
                <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
                <p class="titulo-recomendados">Por favor ingrese los datos del lugar que quiere registrar en los siguientes campos</p>
                    <div class="form-group">
                        <input type="text" value="<?php 
                            $username = $_SESSION['usuario'];
                            $sql_fetch_todos = "SELECT * FROM usuarios ORDER BY id ASC";
                            $query = mysqli_query($conexion, $sql_fetch_todos);
                        
                            while($fila = mysqli_fetch_array($query)){
                                if($fila['usuario'] == $username){
                                    $actual = $fila['nombre'];
                                    echo $actual;
                                }
                            }
                        ?>" hidden required name="usuario" id="usuario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="titulo-recomendados">Nombre del Lugar</label>
                        <br>
                        <input class="titulo-recomendados" type="text" value="<?php echo $_GET['nom'] ?>" class="form-control" name="nombre" required>
                    </div>  
                    <div class="form-group">
                        <label for="municipio" class="titulo-recomendados">Municipio</label>
                        <br>
                        <select name="municipio" id="municipio" class="titulo-recomendados" required>
                            <option value="Abasolo">Abasolo</option>
                            <option value="Aldama">Aldama</option>
                            <option value="Altamira">Altamira</option>
                            <option value="Antiguo Morelos">Antiguo Morelos</option>
                            <option value="Burgos">Burgos</option>
                            <option value="Bustmante">Bustamante</option>
                            <option value="Camargo">Camargo</option>
                            <option value="Casas">Casas</option>
                            <option value="Ciudad Madero">Ciudad Madero</option>
                            <option value="Cruillas">Cruillas</option>
                            <option value="Gomez Farías">Gomez Farías</option>
                            <option value="González">Gonzalez</option>
                            <option value="Güémez">Guemez</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Gustavo Díaz Ordaz">Gustavo Diaz Ordaz</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jaumave">Jaumave</option>
                            <option value="Llera">Llera</option>
                            <option value="Mainero">Mainero</option>
                            <option value="El Mante">El Mante</option>
                            <option value="Matamoros">Matamoros</option>
                            <option value="Méndez">Mendez</option>
                            <option value="Mier">Mier</option>
                            <option value="Miguel Alemán">Miguel Aleman</option>
                            <option value="Miquihuana">Miquihuana</option>
                            <option value="Nuevo Laredo">Nuevo Laredo</option>
                            <option value="Nuevo Morelos">Nuevo Morelos</option>
                            <option value="Ocampo">Ocampo</option>
                            <option value="Padilla">Padilla</option>
                            <option value="Palmillas">Palmillas</option>
                            <option value="Reynosa">Reynosa</option>
                            <option value="Río Bravo">Río Bravo</option>
                            <option value="San Carlos">San Carlos</option>
                            <option value="San Fernando">San Fernando</option>
                            <option value="San Nicolás">San Nicolas</option>
                            <option value="Soto la Marina">Soto la Marina</option>
                            <option value="Tampico">Tampico</option>
                            <option value="Tula">Tula</option>
                            <option value="Valle Hermoso">Valle Hermoso</option>
                            <option value="Victoria">Victoria</option>
                            <option value="Villagrán">Villagran</option>
                            <option value="Xicoténcatl">Xicotencatl</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="titulo-recomendados">Descripción</label>
                        <br>
                        <textarea name="descripcion" id="" cols="30" rows="10" required class="titulo-recomendados"></textarea>
                        <!-- <input type="text" value="<?php //echo $_GET['desc'] ?>" class="form-control" name="descripcion" required> -->
                    </div>
                    <div>
                        <label for="uploadedfile" class="titulo-recomendados">Fotografía del Lugar</label> <br>
                        <input type="file" name="uploadedfile" required class="titulo-recomendados">
                    </div>
                    <br>
                    <div class="botones">
                        <button type="submit" class="btn" name="aceptar" class="titulo-recomendados">Registrar</button>
                    </div>
            </form>
            <br>
        </div>
    </div>

    <script>
        var element = document.getElementById("scrollear");
        element.scrollIntoView();
    </script>

    <?php
        include 'includes/footer.php'
    ?>
</body>
</html>