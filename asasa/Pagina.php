<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
</head>
<body>
    <header>
        <div class="logout" >
        <?php
        session_start();
        if (isset($_SESSION['user_id']) && isset($_SESSION['nombre'])) {
            echo '<p>Bienvenid@, ' . $_SESSION['nombre'] . '</p>';
        }
        ?>
            <a href="logout.php"> <img src="logout.png" alt=""> </a>

           </div>
        <div class="header__superior">
            <div class="logo" >
                <img src="Eslogan (1).png" alt="">
            </div>
            <div class="search">
                <input type="search" id="input-search" placeholder="Buscar...">
                <div class="content-search">

                    <div class="content-table">
                        <table id="table">
                            <thead>
                                <tr>
                                    <td></td>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <tr>
                                    <td><a href="Hoteles.html">Hoteles Disponibles</a></td>
                                    
                                </tr>
    
                                <tr>
                                    <td><a href="Hoteles.html">Precio Hoteles</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="convertor.html">convertor de precios</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="lugares turisticos.html">Donde ir</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="Transportes.html">transportes</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="chicamocha.html">Chicamocha</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="pony.html">Actividades para los niños</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="libro.html">Casa del libro</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="Transportes.html">numero taxis</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="Transportes.html">Rutas</a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="actividades.html">Actividades </a></td>
                                </tr>
                                
                                <tr>
                                    <td><a href="Pagina.php">Cultura</a></td>
                                </tr>
                                <tr>
                                    <td><a href="Pagina.php">Economia de Santander</a></td>
                                </tr>
                                <tr>
                                    <td><a href="Hoteles4.html">Hoteles 4 estrellas</a></td>
                                </tr>
                                <tr>
                                    <td><a href="Hoteles3.html">Hoteles 3 estrellas</a></td>
                                </tr>
                                <tr>
                                    <td><a href="Hoteles5.html">Hoteles 5 estrellas</a></td>
                                </tr>
                                <tr>
                                    <td><a href="lugares turisticos.html">Que lugares puedo visitar</a></td>
                                </tr>
                                <tr>
                                    <td><a href="actividades.html">Parapente</a></td>
                                </tr>
                                <tr>
                                    <td><a href="santisimo.html">Santisimo</a></td>
                                </tr>
                                <tr>
                                    <td><a href="Transportes.html">Transporte Barato</a></td>
                                </tr>
                                <tr>
                                    <td><a href="catedral.html">Sagrada familia</a></td>
                                </tr>
                                <tr>
                                    <td  aria-hidden=""><a  href="easteregg.html">zkka{}¡</a></td>
                                </tr>                            </tbody>
                        </table>
                    </div>
                </div>
            
            <script src="js/search.js"></script>
            </div>
        </div>
        <div class="container__menu">
            <div class="menu">
                <input type="checkbox" id="check__menu">
                <label id="#label__check" for="check__menu">
                    <i class="fa-solid fa-bars icon__menu"></i>
                </label>
                <nav>
                    <ul>
                        <li><a href="Pagina.php"  id="selected" ></a></li>
                        <li><a href="Hoteles.html">Hoteles y precios 🏨</a>
                        <ul>
                            <li><a href="Hoteles5.html">Hoteles 5 estrellas</a></li>
                            <li><a href="Hoteles4.html">Hoteles 4 estrellas</a></li>
                            <li><a href="Hoteles3.html">Hoteles 3 estrellas</a></li>
                        </ul>
                        </li>
                        <li><a href="lugares turisticos.html">Lugares turisticos 🏞️</a></li>
                        <li><a href="Transportes.html">Transportes 🚌</a></li>
                        <li><a href="actividades.html">Actividades extremas 🪂</a></li>
                        <li><a href="convertor.html">Conversion de precios 💱</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>
    <main>
        <article>
         <h2 >DESCUBRE EL DEPARTAMENTO DE SANTANDER</h2>
             <p  >Te damos la bienvenida al maravilloso departamento de santander, 
                    te presentaremos aquellos lugares 
                que puedes visitar en tu hospedaje en este departamento.
             Pero primero que todo hablaremos de algunos aspectos a destacar de nuestro maravilloso departamento como:</p>
             <br>
             <br>
       
             <h2>Geografia</h2>
             <br>
             <div class="pegado">
                <img src="geografia.jpg" width="300" height="300">
             <p class="texto">Santander limita al norte con los departamentos de Norte de Santander y Cesar, al este con Boyacá y Norte de Santander, 
                al sur con Boyacá y Antioquia, y al oeste con el departamento de Bolívar. Su capital es Bucaramanga, una ciudad importante 
                en la región. El departamento colombiano de Santander ocupa en el país el cuarto lugar por su importancia poblacional y económica. 87 municipios y 30.537 km² que significa el 2,7% del territorio nacional.
    
                Se halla comprendido entre los 5° 26´ y 8° 08¨ de latitud norte. 72° 26´ y 74° 32´ de longitud al oeste del meridiano de Greenwich, sobre la zona intertropical o latitudes bajas. Está situado en el norte del país formando parte de la región Andina, su territorio cubre la vertiente occidental de la Cordillera Oriental.</p>
            </div>
        
                
             
        
            <h2>Economía</h2>
            <br>
            <div class="pegado">
                <img src="Economia.jpeg" width="300" height="300">
            <p class="texto">La economía de Santander se basa en varios sectores, incluyendo la agricultura, la industria y los servicios. Es conocido por 
                la producción de café, cacao, tabaco y frutas. La industria manufacturera también es un sector importante, con la producción 
                de alimentos, productos químicos, textiles y productos farmacéuticos. Además, el turismo es una fuente creciente de ingresos 
                para el departamento, gracias a sus hermosos paisajes naturales, parques nacionales y sitios históricos.</p>
            </div>
    
                
        
            <h2>Cultura y Tradiciones</h2>
            <br>
            <div class="pegado">
                <img src="cultura.jpg" width="250" height="300">
            <p class="texto">Santander es conocido por su rica tradición cultural, que incluye música, danzas y festivales. La región es famosa por la 
                música de la banda, que es una forma tradicional de música colombiana. También tiene festivales y celebraciones populares, 
                como el Festival del Cacao y el Festival de San Gil.</p>
            </div>
        
            <h2>Educación</h2>
            <br>
            <div class="pegado">
                <img src="educacion.jpg" width="300" height="300">
            <p class="texto">Santander cuenta con varias instituciones educativas, incluyendo universidades y colegios. 
                La Universidad Industrial de Santander (UIS) es una de las universidades más prominentes del departamento y del país.</p>
            </div>
  
            <h2>Naturaleza y Turismo</h2>
            <br>
            <div class="pegado">
                <img src="turisticos.jpg" width="300" height="300">
            <p class="texto">El departamento de Santander es conocido por su belleza natural. Tiene una topografía diversa que incluye montañas, ríos y cañones. 
                Uno de los destinos turísticos más populares es el Cañón del Chicamocha, que ofrece impresionantes vistas panorámicas 
                y actividades como parapente y senderismo. Además, el Parque Nacional Natural El Cocuy es un área protegida que atrae a los 
                amantes de la naturaleza y los excursionistas.</p>
            </div>
            
            <h2>Deportes Extremos</h2>
            <br>
            <div class="pegado">
                <img src="parapente.jpg" width="300" height="300">
            <p class="texto">Santander es famoso por ser un destino para deportes extremos y de aventura. San Gil, una ciudad en Santander, es 
                conocida como la capital colombiana de los deportes de aventura. Ofrece actividades como rafting, parapente, espeleología y 
                escalada en roca.</p>      
    </div>    
            <br>
            <br>
       
            <div class="slider-frame" >
                <ul>
                    <li><img src="slider1.jpg" alt=""></li>
                    <li><img src="slider2.jpg" alt=""></li>
                    <li><img src="slider3.jpg" alt=""></li>
                    <li><img src="slider4.jpg" alt=""></li>
                </ul>
            </div>

            <h2>Aquí podras encontrar direntes actividades o beneficios como</h2>
            <p>• Alojamientos</p>
            <br>
            <p>• Transportes de la región</p>
            <br>
            <p>• Sitios para visitar</p>
            <br>
            <p>• Conversiones de monedas</p>
            <br>
            <p>Entre otras muchas más para que disfrutes tú y tu familia o acompañantes</p>
            <br>
            <br>
            <p> Así que, acompañanos a descubrir Santander y sus diversas culturas, lugares y gastronomias.</p>
            <br>
            <br>
            <p>Disfruta de tu viaje!</p>
            <br>
            <br>
        </article>
    
    </body>
    </html>