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
    <title>TurisTam - Cd. Madero</title>
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
                        <h1 class="titulo-municipio section-title1">Cd. Madero </h1>
                        <h2 class="tipo-atraccion">Atracciones Naturales</h2>
                        <h2 class="titulo-atraccion">Playa Miramar </h2>
                        <p class="descripcion-atraccion">Esta costa de arenas doradas y aguas turquesas regala lugares inmejorables para pasar d??as de playa espectaculares. Aqu?? tienes todos los servicios necesarios, adem??s del acceso a los equipos indispensables para la pr??ctica de los deportes acu??ticos de tu preferencia: vela, snorkel, buceo, kayak o windsurf.</p>
                        <img src="http://167.71.185.28/img/cdmadero/playa.jpg" alt="" class="featured__img">

                        <h2 class="titulo-atraccion">R??o P??nuco</h2>
                        <p class="descripcion-atraccion">Si te gustan los paseos de horizontes marinos, una caminata por el malec??n de Miramar. Desde all?? se puede disfrutar de las seductoras vistas del mar del Golfo, por un lado, y de las aguas del r??o P??nuco.</p>
                        <img src="http://167.71.185.28/img/cdmadero/panuco.jpg" alt="" class="featured__img">

                        <h2 class="titulo-atraccion">Laguna del Carpintero</h2>
                        <p class="descripcion-atraccion">Es sorprendente pensar que este cuerpo de agua se encuentra en el coraz??n de la ciudad: cocodrilos, garzas y flamencos habitan entre los manglares y aguas transparentes. Una experiencia gratificante tomar una lancha para recorrer el ??rea y emocionarse con su ex??tica fauna y paisajes.</p>
                        <img src="http://167.71.185.28/img/cdmadero/carpintero.jpg" alt="" class="featured__img">

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