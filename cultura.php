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
    <title>TurisTam - Cultura</title>
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
                <div class="container ventas titulo-recomendados">
                    <a onclick="history.back()"><div class="bk-btn"><div class="bk-btn-triangle"></div><div class="bk-btn-bar"></div></div></a>
                    <div class="info-atracciones">
                        <h1 class="titulo-municipio section-title1">Cultura</h1>
                        <h2 class="tipo-atraccion">El origen de todo...</h2>
                        <p class="descripcion-atraccion" >El nombre del Estado se deriva de Tamaholipa palabra de origen Huasteco, donde el prefijo tam significa "lugar donde". Aunque no existe un acuerdo del significado de holipa, parece ser que la interpretación más común es "rezar mucho", lo cual significa "lugar donde se reza mucho". Durante el periodo colonial temprano, 
                            suno de los pueblos originales de Tamaulipas, hoy extinto, era conocido como los "Santos", en lo que parece una hispanización del término holipa.  </p>
                            <img src="tamaholipa/cult.jpg" alt="" class="">
                            <p class="descripcion-atraccion" >Las regiones culturales de Tamaulipas se dividen tradicionalmente en Norte, Centro, Suroeste (Antiguo Cuarto distrito) y costa sur o región huasteca. En Tamaulipas, la cultura mestiza derivó en varias manifestaciones culturales. En el Norte se presentan características culturales similares al de las entidades del 
                                                    noreste mexicano: La polka, la redova, el chotis, ritmos europeos que llegaron allí durante el Siglo XIX y que han tomado cartas de naturalización en la región. Actualmente la fusión de la música norteña con otros ritmos modernos como la cumbia, la música de banda y el corrido postrevolucionario se han extendido por todo el 
                                                    país, conocida como el movimiento de la música grupera. En el centro del Estado, en la zona serrana de San Carlos, se conserva la tradicional música de la picota, acompañada por danzas y ejecutadas al son de la tambora y el clarinete. En la región del antiguo cuarto distrito, zona semidesértica donde se asentaron las primeras 
                                                    misiones en el estado, se conservan danzas religiosas "de pie y de a caballo" y danzas procesionales que conllevan una compleja organización comunitaria para su organización.
                                                    En la región huasteca se practica el huapango, tocado generalmente por trovadores. Desde el 2000, el Gobernador Tomás Yarrington, inició varios festivales culturales que se han mantenido y que se cuentan entre los principales de México. El Festival Internacional Tamaulipas que es paralelo al Festival Internacional Cervantino de
                                                     Guanajuato, y que se hizo de acuerdo a las tradicionales fiestas de octubre en honor de la creación de la capital del Estado, se desarrolla un amplio programa de actividades con más de 650 eventos artísticos y culturales, presentando artistas de talla local, nacional e internacional, presentando conciertos de ópera, danza clásica,
                                                     teatro, música popular, exposiciones etc. El estado de Tamaulipas cuenta con una importante infraestructura cultural, y es el estado mexicano que cuenta con el mayor número de teatros por habitante. Destacan en la capital, Cd. Victoria, el Centro Cultural Tamaulipas, el Museo de Historia Natural "Tamux" (significa encuentro en Tenek,
                                                      idioma huasteco), el Museo Regional de Historia de Tamaulipas ubicado en el Ex-Asilo Vicentino, la Casa del Arte, el Planetario "Dr.Ramiro Iglesias Leal" y la Rotonda de Tamaulipecos Ilustres. En Tampico: EL Espacio Cultural Metropolitano, que alberga el Museo de la Cultura Huasteca, ubicado en la Laguna del Carpintero, la Casa de la Cultura y el edificio de la Aduana Marítima. En Matamoros, el Teatro de la Reforma, recinto cultural centenario, el Museo Histórico del Fuerte Casa Mata, el Espacio Cultural Olímpico, la Galería Albertina, el Museo de Arte Contemporáneo de Tamaulipas, el Conservatorio de Música San Juan Siglo XXI y el Museo del Agrarismo Mexicano, en el sitio donde se realizara el primer reparto agrario por el Gral Lucio Blanco durante la Revolución Mexicana, y en Nuevo Laredo el Centro Cultural Nuevo Laredo, que alberga el Museo "José Reyes Meza" y el Museo de Historia Natural 
                                                    Nuevo Laredo, El Centro Regional de Promoción a la Literatura Estación Palabra Grabriel García Márquez".  </p>
                            <img src="tamaholipa/cult.jpg" alt="" class="">
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