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
    <title>TurisTam - Reynosa</title>
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
                        <h1 class="titulo-municipio section-title1">Reynosa</h1>
                        <h2 class="tipo-atraccion">Atracciones Naturales</h2>
                        <h2 class="titulo-atraccion">Teatro principal</h2>
                        <p class="descripcion-atraccion">Es un espacio ideal para la expresión de todas las disciplinas artísticas como teatro, cinematografía, danza, opera y conciertos. Cuenta con la más alta tecnología en mecánica teatral, audio e iluminación. Tiene capacidad para 1,181 espectadores, en butacas con excelente óptica, isóptica, panóptica y acústica. Y tiene la más alta tecnología en mecánica teatral.<p>

                        <h2 class="titulo-atraccion">Teatro experimental</h2>
                        <p class="descripcion-atraccion">Es un espacio para la presentación y promoción de grupos artísticos que requieren de mayor intimidad en sus espectáculos. Por sus particulares características, es posible modificar con facilidad el tamaño y la posición del escenario, así como la cantidad y distribución de los 300 asientos.</p>


                        <h2 class="titulo-atraccion">Sala Artemio Guerra</h2>
                        <p class="descripcion-atraccion">Es un amplio espacio destinado a exponer obras plásticas de gran tamaño pues cuenta con una extensión total de 852 metros cuadrados, con iluminación diseñada especialmente para el espacio.</p>


                        <h2 class="titulo-atraccion">Sala Académica</h2>
                        <p class="descripcion-atraccion">Área antecedente de los salones destinados para los talleres. Esta sala se usa también como galería de exposición de menor tamaño según los requerimientos de las obras a exponer.</p>


                        <h2 class="titulo-atraccion">Biblioteca Centro de Lectura</h2>
                        <p class="descripcion-atraccion">Espacio dedicado al fomento de la lectura de los niños y jóvenes, que cuenta con su sala de lectura, área audiovisual y mesas de trabajo.
                            Recomendaciones:
                            Respetar el horario de lunes a viernes de 10:00 am a 6:00 pm,Sábado
                            10:00 am a 5:00 pm y domingo 12:00 a 5:00 pm </p


                        <h2 class="titulo-atraccion">Zoologico de Reynosa</h2>
                        <p class="descripcion-atraccion">Situado justo a la orilla del Rio Bravo y cuenta con una extensión amplia de terreno para esparcimiento familiar. Se puede realizar actividades de esparcimiento como un dia de campo, reuniones,entre otras</p>


                        <h2 class="titulo-atraccion">La Ciudad de las familias felices.</h2>
                        <p class="descripcion-atraccion">Parque temático interactivo que ofrece por igual entretenimiento y educación para niños y adolescentes.</p>   
                             
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