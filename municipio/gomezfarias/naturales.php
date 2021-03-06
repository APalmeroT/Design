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
    <title>TurisTam - Gomez Farias</title>
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
                        <h1 class="titulo-municipio section-title1">Gomez Farias</h1>
                        <h2 class="tipo-atraccion">Atracciones Naturales</h2>
                        <h2 class="titulo-atraccion">Reserva de la biosfera ???El cielo???</h2>
                        <p class="descripcion-atraccion">Ubicada en la regi??n sureste de Tamaulipas, y dentro de la Sierra Madre Oriental, esta reserva comprende 144,530 hect??reas que forman parte de los municipios de G??mez Far??as, Llera, Jaumave y Ocampo.</p>
                        <img src="http://167.71.185.28/img/gomezfarias/el cielo.png" alt="" class="featured__img">

                        <h2 class="titulo-atraccion">R??os Sabinas</h2>
                        <p class="descripcion-atraccion">Atraviesa el estado de Tamaulipas antes de desembocar en el Guayalejo. Al atravesar el municipio de G??mez Far??s, precisamente en la regi??n ecol??gica El Cielo, el R??o Sabinas se convierte en una fuente de turismo; sus apacibles aguas permiten no solo nadar en ??l, sino navegarlo, hacer kayak, canoa, o simplemente disfrutar los pasajes que forma con la abundante vegetaci??n de la regi??n.</p>
                        <img src="http://167.71.185.28/img/gomezfarias/rio sabinas.png" alt="" class="featured__img">
                        
                        <h2 class="titulo-atraccion">R??o Fr??o</h2>
                        <p class="descripcion-atraccion">Adem??s de caracterizarse por ser un para??so natural tambi??n es conocido por tener una de las corrientes superficiales m??s importantes junto con el r??o Sabinas. Estas corrientes atraviesan el territorio en diferentes direcciones y se unen en el municipio antes de verter sus aguas en el Guayalejo o Tames??.</p>
                        <img src="http://167.71.185.28/img/gomezfarias/rio frio.png" alt="" class="featured__img">
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