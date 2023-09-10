<?php require_once "config/conexion.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa Tunari</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="site-header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <p style="font-size: 20px;">TURISMO DEL MUNICIPIO DE VILLA TUNARI</p>
                </a>

                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/arco.jpg" width="200px"alt="">
                    </a>
                </div>

                <nav id="navegacion" class="navegacion">
                    <a href="index.php">Inicio</a>
                    <a href="anuncios.php">Parques</a>
                    <a href="blog.php">Ferias</a>
                    <a href="registro.php">Registro</a>
                </nav>

            </div>
            <label>VILLA TUNARI</label>

        </div>
    </header>

    <section class="contenedor seccion">
        <h1 class="fw-300 centrar-texto animal" style="font-size: 40px; padding: 20px;  line-height: 40px;">
            ¡Villa Tunari, puerta de ingreso a la amazonia boliviana, te invita a disfrutar de su exuberante belleza tropical!</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="img/p 6.jfif" width="900px" alt="50">
                <h3 class="animal">Municipio de Villa Tunari</h3>
                <p class="justificar" style="padding-right: 10px; padding-left: 10px;">Es la Tercera Sección Municipal de la Provincia Chapare, corresponde a la Región del Trópico. Este municipio es conocido como la “Capital Turística del Departamento” por su potencialidad a la hora de ofrecer actividades y paisajes inolvidables.
                    Es una población pequeña rodeada de increíbles paisajes, provistos de una exuberante vegetación y una hidrografía abundante en ríos, arroyos, caídas de agua y pozas naturales. Posee un clima tropical húmedo y cálido. En sus cercanías existen parques nacionales como el Parque Machía y el Nacional Carrasco, donde se preservan animales en peligro de extinción.</p>
                    <a style="margin-bottom: 10px;" href="https://villatunari.gob.bo/" class="boton boton-amarillo">Saber mas</a>
            </div>
            <div class="icono2">
                <img src="img/p 7.jpg" width="900px" alt="50">
                <h3 class="animal">Turismo variado e inolvidable</h3>
                <p class="justificar" style="padding-right: 10px; padding-left: 10px;">Caminatas por senderos de selva, paseos por ríos, arroyos y ascensos a lomas y pequeños cerros desde donde se puede divisar la serranía que se recorta bajo el cielo del sur oeste, así como los amplios y pedregosos lechos de los ríos. También hay opciones de conocer animales en su hábitat y parques recreacionales con diversiones como altos columpios que, desde las inalcanzables ramas de los árboles, mecen a los visitantes en medio de un circuito de sendas, puentes colgantes y plataformas de madera.</p>
                <br>
                <a style="margin-bottom: 10px;" href="https://goo.gl/maps/F7uukCQFsCK5qqoG7" class="boton boton-amarillo">Saber mas</a>
            </div>
            <div class="icono3">
                <img src="img/p 5.jfif" width="900px" alt="50">
                <h3 class="animal">Atactivos turisticos</h3>
                <p class="justificar" style="padding-right: 10px; padding-left: 10px;">“La Jungla” es uno de los parques más visitados, su característica principal son los columpios de cuatro a 18 metros. En cada nivel la adrenalina se expande al máximo. Además, ofrece el deslizamiento en rondana de 50 a 200 metros de largo.

                    Parque “La Hormiga”, donde los turistas son sorprendidos por cariñosos primates, quienes los reciben cuando llegan al lugar. “Martina”, una de las monas más longevas, toma de la mano a los visitantes para llevarles al ingreso y obtener comida.
                    
                    Entre otros parques, se encuentran el Machía y Carrasco, preferidos por las actividades de caminatas y trekking.</p>
                    <br>
                    <a style="margin-bottom: 10px;" href="https://goo.gl/maps/F7uukCQFsCK5qqoG7" class="boton boton-amarillo">Saber mas</a>
                </div>
        </div>
    </section>

    <main class="seccion contenedor">
        <h1 class="fw-300 centrar-texto animal"> Atractivos y actividades turisticas</h1>
        <div class="contenedor-anuncios">

            <div class="anuncio">
                <img src="img/machia 12.jpg" alt="">
                <div class="contenido.anuncio">
                    <h3>PARQUE MACHIA</h3>
                    <p>Parque Machía, de propiedad municipal, ofrece un recorrido de 3 km por el bosque tropical.
                         El Parque alberga  animales silvestres que fueron rescatados del cautiverio y reintegrados a su hábitat
                          natural por voluntarios que realizan una labor
                         de defensa del medio ambiente bajo convenio municipal.Teléfono  Contacto: 23454657</p>
                    <p class="precio"></p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="img/jungla 8.jpg" width="100px"alt="80">
                            <p></p>    
                        </li>
                        <li>
                            <img src="img/mono.webp" width="100px"alt="80">
                            <p></p>    
                        </li>
                        <li>
                            <img src="img/machia2.webp" width="100px"alt="80">
                            <p></p>    
                        </li>
                    </ul>
                    <a href="anuncios.php" class="boton boton-amarillo d-block">Ver mas parques</a>
                </div>
            </div>
            <div class="anuncio">
                <img src="img/jungla.webp" alt="">
                <div class="contenido.anuncio">
                    <h3> LA JUNGLA </h3>
                    <p> 
                        Ubicado en el centro poblado de Chipiriri, el Parque La Jungla cuenta con un área de recreación
                         para grandes y pequeños, posee áreas verdes donde el visitante puede lanzarse de columpios gigantes y
                          refrescarse en el río Chipiriri. Teléfono  Contacto:   73750240</p>
                    <p class="precio"></p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="img/jungla1.webp" width="150px"alt="">
                            <p></p>    
                        </li>
                        <li>
                            <img src="img/jungla 2.webp" width="150px"alt="">
                            <p></p>    
                        </li>
                        <li>
                            <img src="img/jungla.jpg" width="150px"alt="">
                            <p>4</p>    
                        </li>
                    </ul>
                    <a href="anuncios.php" class="boton boton-amarillo d-block">Ver mas parques</a>
                </div>
            </div>
            <div class="anuncio">
                <img src="img/hormiga 1.webp" alt="">
                <div class="contenido.anuncio">
                    <h3>LA HORMIGA</h3>
                    <p> Centro de Preservación Ecoturistico. Ubicado en la localidad de Esteban Arce. 
                        La Hormiga,  invita al visitante a descubrir especies forestales, flores exóticas y
                         cultivos tropicales, asimismo observar lagartos, tortugas y chanchos del monte. Teléfono  Contacto: 67680760 </p>
                    <p class="precio"></p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="img/hormiga 2.webp" width="150px">
                            <p></p>    
                        </li>
                        <li>
                            <img src="img/hormiga 3.webp" width="150px">
                            <p></p>    
                        </li>
                        <li>
                            <img src="img/hormiga 4.webp " width="150px">
                            <p></p>    
                        </li>
                    </ul>
                    <a href="anuncios.php" class="boton boton-amarillo d-block">ver mas parques</a>
                </div>
            </div>

        </div>
        <div class="ver-todas">
            <a href="anuncios.php" class="boton boton-verde">Ver mas parques</a>
        </div>
    </main>


    <h3 class="centrar-texto fw-300"> Eventos y Ferias Turísticas</h3>
    <div class="seccion-inferior contenedor seccion">

        <section class="blog">
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="img/feria 1.jpg" alt="">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4> Feria del Pescado</h4>
                    </a>
                    <!---<p>Escrito el: <span>20/10/2019</span>por: <span>Admin</span></p> -->
                    <p>El municipio de Villa Tunari invita a la XXI versión de la Feria del Pescado, el 2 y 3 de Agosto,
                         en el campo ferial de ese municipio.</p>
                </div>  
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="img/arco.jpg" alt="">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                       <h4>feria Comunitaria Productiva, Gastronómica y Turística, Eterazama </h4> 
                    </a>
                   <!---- <p>Escrito el: <span>20/10/2019</span>por: <span>Admin</span></p>-->
                    <p>earum nostrum sed earum nostrum sed v</p>
                </div>  
            </article>
        </section>
        <section class="blog">
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="img/villa-1.jpg" alt="">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4> Feria Productiva Cultural y Turismo, Cristal Mayu </h4>
                    </a>
                    <p>Escrito el: <span>20/10/2019</span>por: <span>Admin</span></p>
                    <p>earum nostrum sed earum nostrum sed v</p>
                </div>  
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="img/arco.jpg" alt="">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Feria de la Coca, Padresama</h4>
                    </a>
                    <p>Escrito el: <span>20/10/2019</span>por: <span>Admin</span></p>
                    <p>earum nostrum sed earum nostrum sed v</p>
                </div>  
            </article>
        </section>
    </div>

    <section class="imagen-contacto">
            <h2 style="margin: 2px;" class="animal"> Como llegar</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3816.041294047749!2d-65.422063!3d-16.972519000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e443cbfd9b9471%3A0x3d19c7c69173d76b!2sPlaza%20Principal%20de%20Villa%20Tunari!5e0!3m2!1ses-419!2sbo!4v1693278716850!5m2!1ses-419!2sbo" width="90%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <a style="margin-bottom: 10px;" href="https://goo.gl/maps/F7uukCQFsCK5qqoG7" class="boton boton-amarillo">Llevame ahi</a>
    </section>
<br>
    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="index.php">Inicio</a>
                    <a href="anuncios.php">Parques</a>
                    <a href="blog.php">Ferias</a>
                    <a href="registro.php">Registro</a>
            </nav>
            <p class="copyright">Gobierno Autonomo Municipal de Villa Tunari &copy;</p>
        </div>
</footer>
  
</body>

</html>