<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="http://167.71.185.28/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="http://167.71.185.28/logo.png" />
    <title>TurisTam - Casas</title>
</head>
<body>

        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include '../../includes/nav-admin.php';
            }else{
                include '../../includes/info-login-in.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include '../../includes/info-login.php';
            }
        ?>

    <div class="wrapper">
        <div class="nav-fondo">
            <?php
                include '../../includes/header-in.php'
            ?>
        </div>
        
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
            $usuario_actual = $_SESSION['usuario'];
        
            if(strval($usuario_actual) == 'admin'){
                include '../../includes/nav-admin.php';
            }else{
                include '../../includes/nav-municipios.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
                include '../../includes/nav-municipios.php';
            }
        ?>

        <div class="info-atracciones">
            <section>
                <div class="container ventas titulo-recomendados" id="scrollear">
                    <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
                    <div class="info-atracciones">
                        <h1 class="titulo-municipio section-title1">Casas</h1>
                        <h2 class="tipo-atraccion">Atracciones Patrimoniales o Históricas</h2>
                        <h2 class="titulo-atraccion">Presidencia municipal villa de casas</h2>
                        <p class="descripcion-atraccion">La cabecera municipal, Villa de Casas, se localiza en las coordenadas 23º42´ latitud norte y 98º44´longitud oeste,</p>
                        <img src="http://167.71.185.28/img/casas/presidencia.png" alt="" class="featured__img">

                        <h2 class="titulo-atraccion">Iglesia purísima concepción</h2>
                        <p class="descripcion-atraccion">La iglesia de la Purísima es un templo religioso de culto católico y está bajo la advocación de Purísima Concepción en el municipio de Villa de casas tamaulipas. </p>
                        <img src="http://167.71.185.28/img/casas/iglesia.png" alt="" class="featured__img">
     
                    </div>
                </div>
            </section>
        </div>

        <script>
            var element = document.getElementById("scrollear");
            element.scrollIntoView();
        </script>

        <?php
            include '../../includes/footer.php'
        ?>
    </div>
</body>
</html>