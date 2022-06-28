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
    <title>TurisTam - Camargo</title>
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
                        <h1 class="titulo-municipio section-title1">Camargo</h1>
                        <h2 class="tipo-atraccion">Parques</h2>
                        <h2 class="titulo-atraccion">Monumento conmemorativo a la batalla de Santa Gertrudis</h2>
                        <p class="descripcion-atraccion">Monumento conmemorativo a la batalla de Santa Gertrudis, erigido en las lomas de Santa Gertrudis al sureste de Camargo; monumento a Miguel Hidalgo en la plaza principal, asi como monumentos en la Plaza Servando Canales y en la Plaza Benito Juárez</p>
                        <img src="http://167.71.185.28/img/camargo/santa.jpg" alt="" class="featured__img">
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