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
                        <h1 class="titulo-municipio section-title1">Historia</h1>
                        <h2 class="tipo-atraccion">...</h2>
                        <p class="descripcion-atraccion" >De acuerdo a registros paleontológicos y arqueológicos, los primeros asentamientos humanos en Tamaulipas datan de doce milenios antes de la era cristiana, y están identificados en el llamado "Complejo Diablo", en alusión a un cañón de la Sierra de Tamaulipas. Más tarde, a nivel del Trópico de Cáncer, aparecen las primeras manifestaciones de la civilización indígena, ligadas al descubrimiento y domesticación del maíz y con ello, al inicio de la vida agrícola y la agrupación de asentamientos permanentes. Consecuentemente, en este período comenzó a fincarse en esta región una de las manifestaciones de la cultura Mesoamericana.

                                                            Tres fueron las áreas culturales de Mesoamérica en Tamaulipas: los pueblos de la Sierra Madre Oriental, los pueblos de la Sierra de Tamaulipas y la Huasteca. Fue en esta última área donde el patrón cultural mesoamericano se definió con mayor claridad y cuyo legado se ha trasmitido hasta nuestros días en las comunidades indígenas huastecas, aunque éstas no sobrevivieron en Tamaulipas y sí en otras entidades como San Luis Potosí e Hidalgo. En nuestra entidad, los huastecas se asentaron principalmente a lo largo de la cuenca baja del río Guayalejo-Tamesí y en los valles montañosos de Tanguanchín (Ocampo) y Tammapul (Tula). Políticamente no constituyeron un Estado, sino más bien se integraban como un conjunto de señoríos. 
                                                            </p>
                                                             <p class="descripcion-atraccion" > Fueron hábiles artesanos y poseían una compleja cosmogonía religiosa, al grado de que en la Huasteca surgió el concepto del dios Quetzalcóatl. Como pueblo ubicado en un espacio periférico de la Mesoamérica nuclear, mantuvieron una larga autonomía hasta que en el posclásico tardío los mexicanas sometieron a su dominio a una porción de la Huasteca.

                                                            En Tamaulipas, entre los siglos XV y XVI, sucesivas oleadas de nómadas del norte hicieron replegar a los huastecas hacia el río Pánuco, de tal forma que al momento de la Conquista española, prácticamente ya no ocupaban su territorio. Sobre los grupos de la Sierra Madre Oriental, si bien disponemos de investigaciones arqueológicas, no tenemos mucha información sobre la identificación cultural de los pueblos prehispánicos que la ocuparon. Hacia la parte meridional, en la región de Ocampo, surgieron sociedades indígenas que poseían una significativa diversificación agrícola, mientras que en la parte septentrional, entre los filos de la serranía, hubo asentamientos con un gran trabajo constructivo, como se hace patente en el Balcón de Montezuma, una zona arqueológica ubicada en las cercanías de la actual capital del estado. Para el siglo XVII, al tiempo del primer encuentro con la cultura occidental, la Sierra Madre era ocupada por los llamados indios pisones. Para el caso de la Sierra de Tamaulipas y como se ha mencionado, de ella se tienen antiquísimas referencias históricas, así como múltiples ejemplos de la evolución posterior de los pueblos indígenas que la habitaron.

                                                            Lo anterior es visible en las numerosas ruinas diseminadas en toda esta casi impenetrable serranía, como es el caso de El Sabinito, un interesante sitio actualmente en investigación, que nos habla de una sociedad organizada de tipo mesoamericano. Sin embargo, existen evidencias de que durante el posclásico este modelo cultural se agotó, quedando habitada la sierra por diversos grupos de agricultores, pero de un nivel de civilización menor. En contraste al mundo mesoamericano, en el norte de la entidad y en todo el conjunto del noreste de México y el sur de Texas, imperó en la antigüedad y hasta el arribo de los españoles, un patrón cultural de múltiples grupos tribales nómadas (los chichimecas), entre los que el tronco lingüístico predominante era la lengua coahuilteca. Este vasto espacio norteño formó parte del área cultural de Aridoamérica o la "América árida". Se trataba de la presencia de numerosas bandas de indios cazadores-recolectores, que deambulaban por las llanuras, especialmente en las cercanías de las corrientes fluviales, los que poseían una reducida cultura material y muy elementales estructuras de organización social. Por mencionar algunos, cabría citar a los carrizos de orillas del río Bravo, a los pintos de las riberas del Conchas o a los janambres del centro de Tamaulipas. Asolados por las redadas esclavistas provenientes de la Huasteca o del Nuevo Reino de León durante los siglos XVI y XVII, los indios de Tamaulipas ofrecieron una fiera resistencia a la ocupación novohispana. Además, este espacio costero se convirtió en refugio de las etnias de las entidades vecinas, identificados como "apóstatas", es decir, que habían renunciado a la cristianización. Con la colonización de Tamaulipas a partir de la segunda mitad del siglo XVIII, se intentó asentar a los indios chichimecas en misiones a cargo de frailes franciscanos. Sin embargo, hubo muy poco arraigo indígena en estas misiones y los diversos grupos que deambulaban por su territorio acabaron por extinguirse. En este proceso actuaron la guerra, el desequilibrio de sus antiguos hábitats y costumbres de caza y recolección, las epidemias y su poca disposición para asimilarse al orden colonial. Algunos grupos trascendieron hasta mediados del siglo XIX, hasta finalmente desaparecer como etnias socialmente diferenciadas.

                                                            Antes de la llegada de los conquistadores españoles el territorio de Tamaulipas estuvo ocupado por varias etnias de las cuales sobresalen los huastecos. Américo Vespucio, el célebre cartógrafo italiano que bautizó al continente, visitó el territorio tamaulipeco a finales del siglo XVI y en su correspondencia con Lorenzo di Pierfrancesco mencionó que los nativos llamaban al territorio Lariab. Durante la colonia se le conoció con otros nombres: Reino Guasteca, Provincia de Amichel y Tierra Garayana, Provincia de Pánuco, Comarca de Paul, de Alifau y Ocinan, Médanos de la Magdalena, Costa del Seno Mexicano, Nuevo Reino de León y Nuevo Santander. El nombre actual proviene de la fundación del pueblo de Tamaholipa que hiciese Fray Andrés de Olmos en 1544. 
                                                            El primer asentamiento permanente Español en el área fue Tampico en 1554. Lo que ahora es Tamaulipas fue incorporada como una provincia de la Nueva España en 1746 con el nombre de Nuevo Santander.

                                                            Durante la mayor parte de la colonia la población europea sufrió los embates de los grupos indígenas rebeldes, a los que a su vez esclavizaban o asesinaban. En 1732 José de Escandón arribó al territorio y desarrolló un agresivo programa de colonización y pacificación que se extendería al vecino Nuevo Reino de León. Tras el llamado a la independencia hecho por Miguel Hidalgo y Costilla, Bernardo Gutiérrez de Lara, originario de Revilla (hoy Nva, Cd, Guerrero, Tam.), se unió a las filas insurgentes y obtuvo importantes victorias en San Antonio Bejar (hoy San Antonio, Texas).

                                                            El 17 de abril de 1817 desembarcó en las costas tamaulipecas Francisco Javier Mina, rebelde español que llegó al territorio a combatir al ejército imperial de su país. A mediados de siglo, tras la consumación de la independencia, la pugna entre liberales y conservadores y la invasión de los Estados Unidos afectaron enormemente la región, la cual adquirió un fuerte sentido de autonomía. Tras los abusos generados por la presidencia de Antonio López de Santa Anna, en 1840 decidió independizarse de México y unirse a la República del Río Grande junto a los estados de Nuevo León y Coahuila. La incipiente república fue sofocada por el ejército mexicano. Durante la Guerra de Reforma y la Revolución mexicana se libraron importantes batallas en territorio tamaulipeco y a principios del siglo XX Emilio Portes Gil, oriundo del estado, se convertiría en presidente interino de México.  </p>
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