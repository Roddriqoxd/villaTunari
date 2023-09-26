<?php
session_start();
error_reporting(0);
require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villa Tunari</title>
    <link rel="shortcut icon" href="img/icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <p>TURISMO DEL MUNICIPIO DE VILLA TUNARI</p>
                </a>
                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/villa-1.jpg" alt="Icono menu">
                    </a>
                </div>
                <nav id="navegacion" class="navegacion">

                    <a href="index.php">Inicio</a>
                    <a href="anuncios.php">Parques</a>
                    <a href="blog.php">Ferias</a>
                    <?php 
                    if($_SESSION['nombre'] == null || $varsesion= ''){
                        ?>
                    <a href="registro.php">Registrate</a>
                    <?php
                    }else{
                        ?>
                    <a class="main-links">
                        <li class="dropdown-li">
                            <?php echo $_SESSION['nombre']?>
                            <ul class="dropdown">
                                <form action="config/login/cerrar.php" method="post">
                                    <input type="submit" value="salir">
                                </form>
                            </ul>
                        </li>
                    </a>
                    <?php
                    }
                    ?>
                </nav>
            </div>
        </div>
    </header>

    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto"></h2>
        <h2 class="fw-300 centrar-texto" style="font-family: 'animal';"> Parque la Jungla</h2>
        <div class="contenedor-anuncios">

            <div class="anuncio">
                <img src="img/jungla 1.jpg" alt="">
                <img src="img/jungla 3.jpg" alt="">
                <!-- <div class="contenido-anuncio">
                    <h3>INFORMACION</h3>
                    <P>Ciudad de Villa Tunari - Chapare</P>
                    <P>A 7 kilómetros de Villa Tunari. Ingreso por el lugar de Castillo de la carretera,
                        Cochabamba-Santa Cruz.</P>
                </div> -->
            </div>

            <div class="anuncio">
                <img src="img/jungla 2.webp" alt="">
                <img src="img/jungla 8.jpg" alt="">
                <!-- <div class="contenido-anuncio">
                    <h3>CONTACTOS</h3>
                    <p>(591) 73780871 </p>
                    <p>(591) 73780871</p>
                    <p> </p>
                </div> -->
            </div>

            <div class="anuncio">
                <img src="img/jungla 6.jpg" alt="">
                <img src="img/jungla 7.jpg" alt="">
                <!-- <div class="contenido-anuncio">
                    <h3>HORARIO DE ATENCION</h3>

                    <p>Lunes: 07:00 - 19:00 </p>
                    <p>Martes: 07:00 - 19:00 </p>
                    <p>Miércoles: 07:00 - 19:00</p>
                    <p>Jueves: 07:00 - 19:00 </p>
                    <p>Viernes: 07:00 - 19:00 </p>
                    <p>Sábado: 07:00 - 19:00 </p>
                    <p>Domingo: 07:00 - 19:00 </p>

                </div> -->
            </div>
            <div class="contenedor-informacion">
                <hr>
                <div class="informacion">
                    <p class="original" onclick="visible(1,2)">
                        INFORMACION
                    </p>
                    <P class="extra" id="1">Parque recreativo de aventura, a 7 kilómetros de Villa Tunari, en el trópico
                        cochabambino, para disfrutar de un emocionante día de descanso, distracción, adrenalina y del
                        majetuoso ambiente que la naturaleza ofrece.
                        PRINCIPALES ATRACTIVOS:
                        El Parque Recreativo La Jungla, cuenta con varios columpios que van desde 3mts de altura
                        (principiantes), hasta los 18 mts de altura(solo valientes), cuenta también con puentes
                        colgantes sobre árboles, roldanas, rio con playas de arena aptas para nadar, áreas de camping y
                        también ofrece servicio de restaurante.
                        CÓMO LLEGAR:
                        En Villa Tunari, en plena avenida principal, buscar la zona de taxis (Integración y Chuquisa)
                        preguntar por aquellos que van al lado de Eterazama, empresas LIDER y NACIONAL. </P>
                    <p class="extra menos" id="2" onclick="invisible(1,2)" style="color: #8989ff;"><br>Ver menos</p>
                    <hr>
                </div>

                <div class="informacion">
                    <p class="original" onclick="visible(3,4)">
                        UBICACION
                    </p>
                    <P class="extra" id="3">Parque recreativo de aventura, a 7 kilómetros de Villa Tunari, en el trópico
                        cochabambino, para disfrutar de un emocionante día de descanso, distracción, adrenalina y del
                        majetuoso ambiente que la naturaleza ofrece.
                        PRINCIPALES ATRACTIVOS:
                        El Parque Recreativo La Jungla, cuenta con varios columpios que van desde 3mts de altura
                        (principiantes), hasta los 18 mts de altura(solo valientes), cuenta también con puentes
                        colgantes sobre árboles, roldanas, rio con playas de arena aptas para nadar, áreas de camping y
                        también ofrece servicio de restaurante.
                        CÓMO LLEGAR:
                        En Villa Tunari, en plena avenida principal, buscar la zona de taxis (Integración y Chuquisa)
                        preguntar por aquellos que van al lado de Eterazama, empresas LIDER y NACIONAL. </P>
                    <p class="extra menos" id="4" onclick="invisible(3,4)" style="color: #8989ff;"><br>Ver menos</p>
                    <hr>
                </div>

                <div class="informacion">
                    <p class="original" onclick="visible(5,6)">
                        HORARIOS Y NUMEROS DE CONTACTO
                    </p>
                    <P class="extra" id="5">Parque recreativo de aventura, a 7 kilómetros de Villa Tunari, en el trópico
                        cochabambino, para disfrutar de un emocionante día de descanso, distracción, adrenalina y del
                        majetuoso ambiente que la naturaleza ofrece.
                        PRINCIPALES ATRACTIVOS:
                        El Parque Recreativo La Jungla, cuenta con varios columpios que van desde 3mts de altura
                        (principiantes), hasta los 18 mts de altura(solo valientes), cuenta también con puentes
                        colgantes sobre árboles, roldanas, rio con playas de arena aptas para nadar, áreas de camping y
                        también ofrece servicio de restaurante.
                        CÓMO LLEGAR:
                        En Villa Tunari, en plena avenida principal, buscar la zona de taxis (Integración y Chuquisa)
                        preguntar por aquellos que van al lado de Eterazama, empresas LIDER y NACIONAL. </P>
                    <p class="extra menos" id="6" onclick="invisible(5,6)" style="color: #8989ff;"><br>Ver menos</p>
                    <hr>
                </div>
            </div>
        </div>

        <script>
        function visible(id, button) {
            document.getElementById(id).style.display = 'inline';
            document.getElementById(button).style.display = 'inline';
        }

        function invisible(id, button) {
            document.getElementById(id).style.display = 'none';
            document.getElementById(button).style.display = 'none';
        }
        </script>

        </div>
    </main>
    <?php
            $query = mysqli_query($conexion, "SELECT * FROM parques");
            while ($data = mysqli_fetch_assoc($query)) { ?>
    <main class="seccion contenedor">


        <h2 class="fw-300 centrar-texto"></h2>
        <h2 class="fw-300 centrar-texto" style="font-family: 'animal';"><?php echo $data['nombre']; ?></h2>
        <div class="contenedor-anuncios">

            <div class="anuncio">
                <img src="assets/img/<?php echo $data['img1']; ?>" alt="">
                <img src="assets/img/<?php echo $data['img2']; ?>" alt="">
            </div>

            <div class="anuncio">
                <img src="assets/img/<?php echo $data['img3']; ?>" alt="">
                <img src="assets/img/<?php echo $data['img4']; ?>" alt="">
            </div>

            <div class="anuncio">
                <img src="assets/img/<?php echo $data['img5']; ?>" alt="">
                <img src="assets/img/<?php echo $data['img6']; ?>" alt="">
            </div>

            <div class="contenedor-informacion">
                <hr>
                <div class="informacion">
                    <p class="original" onclick="visible(1,2)">
                        INFORMACION
                    </p>
                    <P class=""><?php echo $data['informacion']?></P>
                    <p class="extra menos" onclick="invisible(1,2)" style="color: #8989ff;"><br>Ver menos</p>
                    <hr>
                </div>

                <div class="informacion">
                    <p class="original" onclick="visible(3,4)">
                        UBICACION
                    </p>
                    <P class="extra" id="3"></P>
                    <div>
                        <?php echo $data['ubicacion']?>
                    </div>

                    <p class="extra menos" id="4" onclick="invisible(3,4)" style="color: #8989ff;"><br>Ver menos</p>
                    <hr>
                </div>

                <div class="informacion">
                    <p class="original" onclick="visible(5,6)">
                        HORARIOS Y NUMEROS DE CONTACTO
                    </p>
                    <div style="display: flex; justify-content: space-evenly;">
                        <div style="line-height: 0px">
                            <div style="display: flex; ">
                                <p style="width: 150px">LUNES: </p>
                                <p><?php echo $data['lunes']?></p>
                            </div>
                            <div style="display: flex">
                                <p style="width: 150px">MARTES: </p>
                                <p><?php echo $data['martes']?></p>
                            </div>
                            <div style="display: flex">
                                <p style="width: 150px">MIERCOLES: </p>
                                <p><?php echo $data['miercoles']?></p>
                            </div>
                            <div style="display: flex">
                                <p style="width: 150px">JUEVES: </p>
                                <p><?php echo $data['jueves']?></p>
                            </div>
                            <div style="display: flex">
                                <p style="width: 150px">VIERNES: </p>
                                <p><?php echo $data['viernes']?></p>
                            </div>
                            <div style="display: flex">
                                <p style="width: 150px">SABADO: </p>
                                <p><?php echo $data['sabado']?></p>
                            </div>
                            <div style="display: flex">
                                <p style="width: 150px">DOMINGO: </p>
                                <p><?php echo $data['domingo']?></p>
                            </div>
                        </div>
                        <style>
                        .v-line {
                            border-left: thick solid white;
                            height: 200px;
                            position: absolute;
                        }
                        </style>
                        <div class="v-line">
                        </div>

                        <div>
                            <div style="line-height: 10px">
                                <p style="width: 200px">NUMEROS DE CONTACTO: </p>
                                <p><?php echo $data['telefonos']?></p><br>
                                <p style="width: 200px">ESTADO ACTUAL: </p>
                                <p><?php echo $data['estatus']?></p>
                            </div>
                        </div>
                    </div>

                </div>

                <hr>
            </div>
        </div>
        </div>

        <!-- <script>
        function visible(id, button) {
            document.getElementById(id).style.display = 'inline';
            document.getElementById(button).style.display = 'inline';
        }

        function invisible(id, button) {
            document.getElementById(id).style.display = 'none';
            document.getElementById(button).style.display = 'none';
        }
        </script> -->

        </div>

    </main>
    <?php } ?>
    <!-- <main class="seccion contenedor">

        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto"></h2>
            <h2 class="fw-300 centrar-texto">PARQUE MACHIA</h2>
            <div class="contenedor-anuncios">
                /P>
                <div class="anuncio">
                    <img src="img/machia 11.jpg" alt="">
                    <img src="img/machia 18.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>Información</h3>
                        <p>A 7 kilómetros de Villa Tunari. Ingreso por el lugar de Castillo de la carretera,
                            Cochabamba-Santa Cruz.</p>
                        <p>Parque Machía se encuentra a 1Km de la población </p>


                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/machia 16.jpg" alt="">
                    <img src="img/machia 14.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>CONTACTOS</h3>
                        <p>(591-4) 4136572</p>
                        <p>(591) 74377653 </p>
                        <p>(591) 72248393 </p>
                        <p>(591) 74377653 </p>
                        <p>(591) 72248393 </p>
                        <p>neque adipisci offic </p>
                        <p class="precio"></p>

                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/machia 17.jpg" alt="">
                    <img src="img/machia 15.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>HORARIO DE ATENCION</h3>
                        <p>Lunes: 07:00 - 19:00 </p>
                        <p>Martes: 07:00 - 19:00 </p>
                        <p>Miércoles: 07:00 - 19:00</p>
                        <p>Jueves: 07:00 - 19:00 </p>
                        <p>Viernes: 07:00 - 19:00 </p>
                        <p>Sábado: 07:00 - 19:00 </p>
                        <p>Domingo: 07:00 - 19:00 </p>
                    </div>
                </div>
            </div>
            </div>

            </div>
        </main>

        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto"></h2>
            <h2 class="fw-300 centrar-texto">PARQUE LA HORMIGA</h2>
            <div class="contenedor-anuncios">

                <div class="anuncio">
                    <img src="img/hormiga 5.jpg" alt="">
                    <img src="img/hormiga 6.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>INFORMACION</h3>
                        <p>A 7 kilómetros de Villa Tunari. Ingreso por el lugar de Castillo de la carretera,
                            Cochabamba-Santa Cruz.</p>

                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">
                            <P> </P>
                            <br> </br>
                            <P> </P>



                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/hormiga 11.jpg" alt="">
                    <img src="img/hormiga 12.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>CONTACTOS</h3>
                        <p>(591) 73780871 </p>
                        <p>(591) 73780871</p>
                        <p>(591) 73780871 </p>
                        <p>(591) 73780871</p>
                        <p> </p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>

                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/hormiga 9.jpg" alt="">
                    <img src="img/hormiga 10.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>HORARIO DE ATENCION</h3>
                        <p>Lunes: 07:00 - 19:00 </p>
                        <p>Martes: 07:00 - 19:00 </p>
                        <p>Miércoles: 07:00 - 19:00</p>
                        <p>Jueves: 07:00 - 19:00 </p>
                        <p>Viernes: 07:00 - 19:00 </p>
                        <p>Sábado: 07:00 - 19:00 </p>
                        <p>Domingo: 07:00 - 19:00 </p>

                    </div>
                </div>
            </div>
            </div>

            </div>
        </main>

        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto"></h2>
            <h2 class="fw-300 centrar-texto">PARQUE BOSQUE PERDIDO</h2>
            <div class="contenedor-anuncios">

                <div class="anuncio">
                    <img src="img/busque 1.jpg" alt="">
                    <img src="img/busque 2.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>INFORMACION</h3>
                        <p>A 7 kilómetros de Villa Tunari. Ingreso por el lugar de Castillo de la carretera,
                            Cochabamba-Santa Cruz.</p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">
                            <P> </P>
                            <br> </br>
                            <P> </P>


                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/busque 3.jpg" alt="">
                    <img src="img/busque 4.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>CONTACTOS</h3>
                        <p>(591) 73780871 </p>
                        <p>(591) 73780871</p>>
                        <p>(591) 73780871 </p>
                        <p>(591) 73780871</p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>

                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/busque 5.jpg" alt="">
                    <img src="img/busque 6.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>HORARIOS DE ATENCION</h3>
                        <p>Lunes: 07:00 - 19:00 </p>
                        <p>Martes: 07:00 - 19:00 </p>
                        <p>Miércoles:07:00 - 19:00</p>
                        <p>Jueves: 07:00 - 19:00 </p>
                        <p>Viernes: 07:00 - 19:00 </p>
                        <p>Sábado: 07:00 - 19:00 </p>
                        <p>Domingo: 07:00 - 19:00 </p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>
                    </div>
                </div>
            </div>
            </div>

            </div>
        </main>
        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto"></h2>
            <h2 class="fw-300 centrar-texto">Yuraventura Parque Extremo</h2>
            <div class="contenedor-anuncios">

                <div class="anuncio">
                    <img src="img/yura 1.jpg" alt="">
                    <img src="img/yura 9.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>INFORMACION</h3>
                        <p>A 7 kilómetros de Villa Tunari. Ingreso por el lugar de Castillo de la carretera,
                            Cochabamba-Santa Cruz.</p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">
                            <P> </P>
                            <br> </br>
                            <P> </P>



                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/yura 3.jpg" alt="">
                    <img src="img/yura 2.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>CONTACTOS</h3>
                        <p>(591) 73780871 </p>
                        <p>(591) 73780871</p>>
                        <p>(591) 73780871 </p>
                        <p>(591) 73780871</p>>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>

                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/yura 4.jpg" alt="">
                    <img src="img/yura 5.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>HORARIO DE ATENCION</h3>
                        <p>Lunes: 07:00 - 19:00 </p>
                        <p>Martes: 07:00 - 19:00 </p>
                        <p>Miércoles: 07:00 - 19:00</p>
                        <p>Jueves: 07:00 - 19:00 </p>
                        <p>Viernes: 07:00 - 19:00 </p>
                        <p>Sábado: 07:00 - 19:00 </p>
                        <p>Domingo: 07:00 - 19:00 </p>
                        <ul class="iconos-caracteristicas">

                        </ul>
                    </div>
                </div>
            </div>
            </div>

            </div>
        </main>

        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto"></h2>
            <h2 class="fw-300 centrar-texto">Parque Turístico Jurassic Avatar</h2>
            <div class="contenedor-anuncios">

                <div class="anuncio">
                    <img src="img/jura 7.jpg" alt="">
                    <img src="img/jura 2.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>INFORMACION</h3>
                        <p>A 7 kilómetros de Villa Tunari. Ingreso por el lugar de Castillo de la carretera,
                            Cochabamba-Santa Cruz.</p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">
                            <P> </P>
                            <br> </br>
                            <P> </P>



                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/jura 3.jpg" alt="">
                    <img src="img/jura 4.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>CONTACTOS</h3>
                        <p>(591) 73780871 </p>
                        <p>(591) 73780871</p>>
                        <p>(591) 73780871 </p>
                        <p>(591) 73780871</p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>

                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/jura 5.jpg" alt="">
                    <img src="img/jura 1.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>HORARIO DE ATENCION</h3>
                        <p>Lunes:07:00 - 19:00 </p>
                        <p>Martes:07:00 - 19:00 </p>
                        <p>Miércoles:07:00 - 19:00</p>
                        <p>Jueves:07:00 - 19:00 </p>
                        <p>Viernes:07:00 - 19:00 </p>
                        <p>Sábado:07:00 - 19:00 </p>
                        <p>Domingo:07:00 - 19:00 </p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>
                    </div>
                </div>
            </div>
            </div>

            </div>
        </main>

        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto"></h2>
            <h2 class="fw-300 centrar-texto">Las Pozas del Jochi</h2>
            <div class="contenedor-anuncios">

                <div class="anuncio">
                    <img src="img/poza 1.jpg" alt="">
                    <img src="img/poza 2.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>INFORMACION</h3>
                        <p>A 7 kilómetros de Villa Tunari. Ingreso por el lugar de Castillo de la carretera,
                            Cochabamba-Santa Cruz.</p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">
                            <P> </P>
                            <br> </br>
                            <P> </P>


 
                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/poza 3.jpg" alt="">
                    <img src="img/poza 12.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>CONTACTOS</h3>
                        <p>(591) 73780871 </p>
                        <p>(591) 73780871</p>>
                        <p>(591) 73780871 </p>
                        <p>(591) 73780871</p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>
                   
                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/poza 8.jpg" alt="">
                    <img src="img/poza 7.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>HORARIO DE ATENCION</h3>
                        <p>Lunes: 07:00 - 19:00 </p>
                        <p>Martes: 07:00 - 19:00 </p>
                        <p>Miércoles: 07:00 - 19:00</p>
                        <p>Jueves: 07:00 - 19:00 </p>
                        <p>Viernes: 07:00 - 19:00 </p>
                        <p>Sábado: 07:00 - 19:00 </p>
                        <p>Domingo: 07:00 - 19:00 </p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>
                    </div>
                </div>
            </div>
            </div>

            </div>
        </main>

        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto"></h2>
            <h2 class="fw-300 centrar-texto">Leña Verde Paseo Ecoturístico</h2>
            <div class="contenedor-anuncios">

                <div class="anuncio">
                    <img src="img/leña 1.jpeg" alt="">
                    <img src="img/leña 2.jpeg" alt="">
                    <div class="contenido-anuncio">
                        <h3>INFORMACION</h3>
                        <p>A 7 kilómetros de Villa Tunari. Ingreso por el lugar de Castillo de la carretera,
                            Cochabamba-Santa Cruz.</p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">
                            <P> </P>
                            <br> </br>
                            <P> </P>



                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/poza 3.jpg" alt="">
                    <img src="img/leña 12.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>PRECIO DE ENTRADA</h3>
                        <p>neque adipisci officiis delectus</p>
                        <p>neque adipisci offic </p>
                        <p>neque adipisci offic </p>
                        <p>neque adipisci offic </p>
                        <p>neque adipisci offic </p>
                        <p>neque adipisci offic </p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>

                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/villa-1.jpg" alt="">
                    <img src="img/leña 13.jpeg" alt="">
                    <div class="contenido-anuncio">
                        <h3>HORARIO DE ATENCION</h3>
                        <p>Lunes: 07:00 - 19:00 </p>
                        <p>Martes: 07:00 - 19:00 </p>
                        <p>Miércoles: 07:00 - 19:00</p>
                        <p>Jueves: 07:00 - 19:00 </p>
                        <p>Viernes: 07:00 - 19:00 </p>
                        <p>Sábado: 07:00 - 19:00 </p>
                        <p>Domingo: 07:00 - 19:00 </p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>
                    </div>
                </div>
            </div>
            </div>

            </div>
        </main>
        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto"></h2>
            <h2 class="fw-300 centrar-texto">SANTA ELENA</h2>
            <div class="contenedor-anuncios">

                <div class="anuncio">
                    <img src="img/leña 1.jpeg" alt="">
                    <img src="img/leña 2.jpeg" alt="">
                    <div class="contenido-anuncio">
                        <h3>INFORMACION</h3>
                        <p>A 7 kilómetros de Villa Tunari. Ingreso por el lugar de Castillo de la carretera,
                            Cochabamba-Santa Cruz.</p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">
                            <P> </P>
                            <br> </br>
                            <P> </P>



                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/poza 3.jpg" alt="">
                    <img src="img/leña 12.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>PRECIO DE ENTRADA</h3>
                        <p>neque adipisci officiis delectus</p>
                        <p>neque adipisci offic </p>
                        <p>neque adipisci offic </p>
                        <p>neque adipisci offic </p>
                        <p>neque adipisci offic </p>
                        <p>neque adipisci offic </p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>

                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/villa-1.jpg" alt="">
                    <img src="img/leña 13.jpeg" alt="">
                    <div class="contenido-anuncio">
                        <h3>HORARIO DE ATENCION</h3>
                        <p>Lunes: 07:00 - 19:00 </p>
                        <p>Martes: 07:00 - 19:00 </p>
                        <p>Miércoles: 07:00 - 19:00</p>
                        <p>Jueves: 07:00 - 19:00 </p>
                        <p>Viernes: 07:00 - 19:00 </p>
                        <p>Sábado: 07:00 - 19:00 </p>
                        <p>Domingo: 07:00 - 19:00 </p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>
                    </div>
                </div>
            </div>
            </div>

            </div>
        </main>
        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto"></h2>
            <h2 class="fw-300 centrar-texto">LAGUNA PARAISO</h2>
            <div class="contenedor-anuncios">

                <div class="anuncio">
                    <img src="img/leña 1.jpeg" alt="">
                    <img src="img/leña 2.jpeg" alt="">
                    <div class="contenido-anuncio">
                        <h3>INFORMACION</h3>
                        <p>A 7 kilómetros de Villa Tunari. Ingreso por el lugar de Castillo de la carretera,
                            Cochabamba-Santa Cruz.</p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">
                            <P> </P>
                            <br> </br>
                            <P> </P>



                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/poza 3.jpg" alt="">
                    <img src="img/leña 12.jpg" alt="">
                    <div class="contenido-anuncio">
                        <h3>PRECIO DE ENTRADA</h3>
                        <p>neque adipisci officiis delectus</p>
                        <p>neque adipisci offic </p>
                        <p>neque adipisci offic </p>
                        <p>neque adipisci offic </p>
                        <p>neque adipisci offic </p>
                        <p>neque adipisci offic </p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">


                    </div>
                </div>

                <div class="anuncio">
                    <img src="img/villa-1.jpg" alt="">
                    <img src="img/leña 13.jpeg" alt="">
                    <div class="contenido-anuncio">
                        <h3>HORARIO DE ATENCION</h3>
                        <p>Lunes: 07:00 - 19:00 </p>
                        <p>Martes: 07:00 - 19:00 </p>
                        <p>Miércoles: 07:00 - 19:00</p>
                        <p>Jueves: 07:00 - 19:00 </p>
                        <p>Viernes: 07:00 - 19:00 </p>
                        <p>Sábado: 07:00 - 19:00 </p>
                        <p>Domingo: 07:00 - 19:00 </p>
                        <p class="precio"></p>
                        <ul class="iconos-caracteristicas">

                        </ul>
                    </div>
                </div>
            </div>
            </div>

            </div>
        </main> -->

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="index.php">Inicio</a>
                <a href="anuncios.php">Parques</a>
                <a href="blog.php">Ferias</a>
                <a href="registro.php">Registro</a>
            </nav>
            <p class="copyright">TGobierno Autonomo Municipal de Villa Tunari &copy;</p>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>