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
    <link rel="shortcut icon" href="http://167.71.185.28/logo.png"/>
    <title>TurisTam - Municipios</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['usuario'])){
            include 'includes/info-login-in.php';
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
                include 'includes/nav-municipios.php';
            }
            
            }
            if(!(isset($_SESSION['usuario']))){
            include 'includes/nav-municipios.php';
            }
        ?>


        <section>
            <div class="container quienes" id="scrollear">
                <h3 class="section-title2">Lista de municipios de forma alfabética</h3>            
            </div>
        </section>
        
        <div class="div-tabla">
            <table>
                <tr>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
                </tr>
                <tr>
                    <td><a href="municipios/abasolo/index.php">Abasolo</a><br>  <a href="municipios/aldama/index.php">Aldama</a><br>   <a href="municipios/altamira/index.php">Altamira</a><br></td>
                    <td><a href="municipios/burgos/index.php">Burgos</a><br>   <a href="municipios/bustamante/index.php">Bustamante</a>   </td>
                    <td><a href="municipios/casas/index.php">Casas</a><br>    <a href="municipios/ciudadmadero/index.php">Ciudad Madero</a><br> <a href="municipios/cruillas/index.php">Cruillas</a></td>
                </tr>
                <tr>
                    <th>G</th>
                    <th>H</th>
                    <th>J</th>
                </tr>
                <tr>
                    <td><a href="municipios/gomezfarias/index.php">Gómez Farías</a><br> <a href="municipios/gonzalez/index.php">González</a><br> <a href="municipios/guemez/index.php">Güémez</a><br> <a href="municipios/guerrero/index.php">Guerrero</a></td>
                    <td><a href="municipios/hidalgo/index.php">Hidalgo</a></td>
                    <td><a href="municipios/jaumave/index.php">Jaumave</a><br> <a href="municipios/jimenez/index.php">Jiménez</a></td>
                </tr>
                <tr>
                    <th>L</th>
                    <th>M</th>
                    <th>O</th>
                </tr>
                <tr>
                    <td><a href="municipios/llera/index.php">Llera</a></td>
                    <td><a href="municipios/mainero/index.php">Mainero</a><br> <a href="municipios/elmante/index.php">Mante</a><br> <a href="municipios/matamoros/index.php">Matamoros</a><br> <a href="municipios/mendez/index.php">Méndez</a><br> <a href="municipios/mier/index.php">Mier</a><br> <a href="municipios/miguel-aleman/index.php">Miguel Alemán</a><br> <a href="municipios/miquihuana/index.php">Miquihuana</a></td>
                    <td><a href="municipios/ocampo/index.php">Ocampo</a></td>
                </tr>
                <tr>
                    <th>P</th>
                    <th>R</th>
                    <th>S</th>
                </tr>
                <tr>
                    <td><a href="municipios/Padilla/index.php">Padilla</a><br> <a href="municipios/Palmillas/index.php">Palmillas</a></td>
                    <td><a href="municipios/Reynosa/index.php">Reynosa</a><br> <a href="municipios/rio-bravo/index.php">Río Bravo</a></td>
                    <td><a href="municipios/soto-la-marina/index.php">Soto La Marina</a></td>
                </tr>
                <tr>
                    <th>T</th>
                    <th>V</th>
                    <th>X</th>
                </tr>
                <tr>
                    <td><a href="municipios/Tampico/index.php">Tampico</a><br> <a href="municipios/Tula/index.php">Tula</a></td>
                    <td><a href="municipios/Victoria/index.php">Victoria</a><br> <a href="municipios/Villagran/index.php">Villagrán</a></td>
                    <td><a href="municipios/xico/index.php">Xicoténcatl</a></td>
                </tr>
                <tr>
                </tr>
            </table>
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