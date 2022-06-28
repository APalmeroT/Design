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
    <title>TurisTam - Palmillas</title>
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

        <div>
            <section>
                <div class="container ventas titulo-recomendados">
                    <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
                    <div class="info-atracciones">
                        <h1 class="titulo-municipio section-title1">Palmillas</h1>
                        <h2 class="tipo-atraccion">Atracciones Naturales</h2>
                        <h2 class="titulo-atraccion">Arroyos San Diego y Monte Redondo</h2>
                        <p class="descripcion-atraccion">Son de los sitios más populares para disfrutar del municipio en donde se destacan además de sus bellos colores el factor de los caudales que se registran sobre épocas de lluvia.</p>
    
                        <h2 class="titulo-atraccion">Manantial Pedro Diaz</h2>
                        <p class="descripcion-atraccion">Ubicado a 1 kilómetros de la cabecera municipal.</p>
                        <img src="http://167.71.185.28/img/Palmillas-Naturaleza.jpg" alt="" class="featured__img">

                        <h2 class="titulo-atraccion">Manantial El Sauz</h2>
                        <p class="descripcion-atraccion">Se encuentra en pequeña propiedad y a una distancia de 10 kilómetros de la cabecera.</p>
                        <img src="http://167.71.185.28/img/Palmillas-Naturaleza.jpg" alt="" class="featured__img">

                        <h2 class="titulo-atraccion">Manantial las Enramadas</h2>
                        <p class="descripcion-atraccion">Ubicado a 7 Km. de la carretera municipal.</p>

                        <img src="http://167.71.185.28/img/Palmillas-Naturaleza.jpg" alt="" class="featured__img">

                    </div>
                </div>
            </section>
        </div>

        <?php
            include '../../includes/footer.php'
        ?>
    </div>
</body>
</html>