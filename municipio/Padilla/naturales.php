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
    <title>TurisTam - Padilla</title>
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
                        <h1 class="titulo-municipio section-title1">Padilla</h1>
                        <h2 class="tipo-atraccion">Atracciones Naturales</h2>
                        <h2 class="titulo-atraccion">Presa Vicente Guerrero</h2>
                        <p class="descripcion-atraccion">localizada en el municipio de Padilla. Fue construida con objeto de obtener y controlar el agua de los ríos Corona, Purificación y Pilón. Su embalse es el sexto mayor de México con una capacidad de albergar 3,900 hectómetros cúbicos de agua. Su riqueza arquitectónica quedó sepultada bajo las aguas de la Presa Vicente Guerrero, como fueron: la Hacienda de San Juan, La Generala; parroquia de San Antonio de Padua; Hacienda de San Francisco Cuenta con gran cantidad de actividades que puedes realizar desde la pesca deportiva en lancha o en la orilla hasta deportes más extremos como sky en agua, paseo en jet skys, kayaks entre otras</p>
                        <img src="http://167.71.185.28/img/Padilla_Naturaleza.jpg" alt="" class="featured__img">
    
                        <h2 class="titulo-atraccion">Las Delicias</h2>
                        <p class="descripcion-atraccion">Perfecto para acampar, cocinar una rica carne asada al aire libre y tomar un baño en aguas cristalinas, Las Delicias es un sitio que puede satisfacer tus deseos, se encuentra a aproximadamente 42 minutos de la ciudad de Abasolo.</p>
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