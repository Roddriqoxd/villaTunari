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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="inicio">

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="filter: brightness(70%);">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 600px;">
                <img src="img/portada.jpg" class="d-block w-100" style="object-fit: cover; height: 100%;" alt="...">
            </div>
            <div class="carousel-item" style="height: 600px;">
                <img src="img/portada2.jpg" class="d-block w-100" style="object-fit: cover; height: 100%;" alt="...">
            </div>
            <div class="carousel-item" style="height: 600px;">
                <img src="img/portada3.jpg" class="d-block w-100" style="object-fit: cover; height: 100%;" alt="...">
            </div>
        </div>
    </div>
    <a href="#inicio"
        style="background-color: yellow;padding: 1px 10px 10px 10px;position: fixed;border-radius: 23%;bottom: 0;right: 0;margin: 20px;">
        <img src="img/flecha.png" style="width: 25px;" alt="">
    </a>
    <header  class="" style="top: 10px;position: absolute;width: 100%;">
        <div class="contenedor contenido-header">
            <div class="barra" style="background-color: #00000082;padding: 10px;border-radius: 10px;">
                <a href="#">
                    <p style="font-size: 20px;">TURISMO DEL MUNICIPIO DE VILLA TUNARI</p>
                </a>

                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/arco.jpg" width="200px" alt="">
                    </a>
                </div>

                <nav id="navegacion" class="navegacion" style="font-weight: bolder;">

                    <!-- <a href="index.php">Informacion</a> -->
                    <a class="main-links">
                        <li class="dropdown-li" style="background-color: #fff0; color: white;">
                            Informacíon
                            <ul class="dropdown">
                                <li style="cursor: pointer; font-size: 15px;" onclick="go('info')">Un poco de Villa</li>
                                <li style="cursor: pointer; font-size: 15px;" onclick="go('lugar')">Parques</li>
                                <li style="cursor: pointer; font-size: 15px;" onclick="go('ferias')">Ferias</li>
                                <li style="cursor: pointer; font-size: 15px;" onclick="go('como')">Como llegar</li>
                            </ul>
                        </li>
                    </a>
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

                <script>
                function go(id) {
                    location.href = `#${id}`;
                }
                </script>
            </div>
            <label class="repon">VILLA TUNARI</label>

        </div>
    </header>



    <section class=" contenedor seccion" id="info">
        <h1 class=" contenedor fw-300 centrar-texto animal" style="font-size: 40px; padding: 20px;  line-height: 40px;">
            ¡Villa Tunari, puerta de ingreso a la amazonia boliviana, te invita a disfrutar de su exuberante belleza
            tropical!</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <div>
                    <img src="img/p 6.jfif" width="900px" height="300px" alt="50" style="padding: 12px; border-radius: 20px;">
                    <h3 class="animal">Municipio de Villa Tunari</h3>
                    <p class="justificar" style="padding-right: 10px; padding-left: 10px;">Es la Tercera Sección
                        Municipal
                        de la Provincia Chapare, corresponde a la Región del Trópico. Este municipio es conocido como la
                        “Capital Turística del Departamento” por su potencialidad a la hora de ofrecer actividades y
                        paisajes inolvidables.
                        Es una población pequeña rodeada de increíbles paisajes, provistos de una exuberante vegetación
                        y
                        una hidrografía abundante en ríos, arroyos, caídas de agua y pozas naturales. Posee un clima
                        tropical húmedo y cálido. En sus cercanías existen parques nacionales como el Parque Machía y el
                        Nacional Carrasco, donde se preservan animales en peligro de extinción.</p>
                </div>
                <div>
                    <a style="margin-bottom: 10px;" href="https://villatunari.gob.bo/"
                        class="boton boton-amarillo">Saber
                        mas</a>
                </div>

            </div>
            <div class="icono">
                <div>
                    <img src="img/p 7.jpg" width="900px" height="300px" alt="50"  style="padding: 12px; border-radius: 20px;">
                    <h3 class="animal">Turismo inolvidable</h3>
                    <p class="justificar" style="padding-right: 10px; padding-left: 10px;">Caminatas por senderos de
                        selva,
                        paseos por ríos, arroyos y ascensos a lomas y pequeños cerros desde donde se puede divisar la
                        serranía que se recorta bajo el cielo del sur oeste, así como los amplios y pedregosos lechos de
                        los
                        ríos. También hay opciones de conocer animales en su hábitat y parques recreacionales con
                        diversiones como altos columpios que, desde las inalcanzables ramas de los árboles, mecen a los
                        visitantes en medio de un circuito de sendas, puentes colgantes y plataformas de madera.</p>
                </div>
                <div>
                    <a style="margin-bottom: 10px;" href="https://goo.gl/maps/F7uukCQFsCK5qqoG7"
                        class="boton boton-amarillo">Saber mas</a>
                </div>
            </div>
            <div class="icono">
                <div>
                    <img src="img/p 5.jfif" width="900px" height="300px" alt="50"  style="padding: 12px; border-radius: 20px;">
                    <h3 class="animal">Atactivos turisticos</h3>
                    <p class="justificar" style="padding-right: 10px; padding-left: 10px;">“La Jungla” es uno de los
                        parques
                        más visitados, su característica principal son los columpios de cuatro a 18 metros. En cada
                        nivel la
                        adrenalina se expande al máximo. Además, ofrece el deslizamiento en rondana de 50 a 200 metros
                        de
                        largo.

                        Parque “La Hormiga”, donde los turistas son sorprendidos por cariñosos primates, quienes los
                        reciben
                        cuando llegan al lugar. “Martina”, una de las monas más longevas, toma de la mano a los
                        visitantes
                        para llevarles al ingreso y obtener comida.

                        Entre otros parques, se encuentran el Machía y Carrasco, preferidos por las actividades de
                        caminatas
                        y trekking.</p>
                </div>
                <div>
                    <a style="margin-bottom: 10px;" href="https://goo.gl/maps/F7uukCQFsCK5qqoG7"
                        class="boton boton-amarillo">Saber mas</a>
                </div>

            </div>
        </div>
    </section>

    <main class="seccion" style="padding: 30px" id="lugar">
        <h1 class="fw-300 centrar-texto animal">Atractivos y actividades turisticas</h1>
        <div class="contenedor-anuncios">
            <div class="contenedor-anuncios" style="width: 1400px;gap: 10px;
  padding-top: 50px;
  padding-bottom: 50px;">
                <?php
                    $query = mysqli_query($conexion, "SELECT * FROM parques LIMIT 6");
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                <div class="contenido_img">
                    <a href="anuncios.php#<?php echo $data['id'];?>">
                        <figure>
                            <img src="assets/img/<?php echo $data['img1']; ?>">
                            <div class="capa">
                                <h3><?php echo $data['nombre']?></h3>
                                <p><?php echo $data['informacion']?></p>
                            </div>
                        </figure>
                    </a>
                </div>

                <?php } ?>
            </div>

        </div>

    </main>

    <h2 class="centrar-texto fw-300 animal" id="ferias"> Eventos y Ferias Turísticas</h2>
    <div class=" contenedor seccion ferias">

        <?php
                    $query = mysqli_query($conexion, "SELECT * FROM ferias LIMIT 4");
                    while ($data = mysqli_fetch_assoc($query)) { ?>

        <section class="eventos" style="">
            <article class="entrada-blog">
                <div class="imagen" style="padding-right: 12px; width: 230px; height: 150px; overflow: hidden;">
                    <img style="width: 90%;" src="assets/img/<?php echo $data['img1']; ?>" alt="">
                </div>
                <div class="texto-entrada">
                    <a href="blog.php#<?php echo $data['id']; ?>">
                        <h4 class="titulo-feria"
                            style="width: 318px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                            <?php echo $data['nombre']; ?></h4>
                    </a>
                    <p>Fecha:&nbsp; <span><?php echo $data['inicio']  ?></span>
                        <?php 
                    if($data['fin'] ==! null){
                        ?>
                        &nbsp;hasta el:&nbsp; <span><?php echo $data['fin'];?></span></p>
                    <?php
                    }else{
                        ?>
                    </p>
                    <?php
                    }
                    ?>
                    <p
                        style="width: 318px; height: 20px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                        <?php echo $data['descripcion']; ?>
                    </p>
                    <a href="blog.php" class="ir">Ver mas</a>
                </div>
            </article>
        </section>
        <?php } ?>
    </div>

    <section class="imagen-contacto" style="margin-bottom: 20px; margin-top: 50px;" id="como">
        <h2 style="margin: 2px;" class="animal"> Como llegar</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3816.041294047749!2d-65.422063!3d-16.972519000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e443cbfd9b9471%3A0x3d19c7c69173d76b!2sPlaza%20Principal%20de%20Villa%20Tunari!5e0!3m2!1ses-419!2sbo!4v1693278716850!5m2!1ses-419!2sbo"
            width="90%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <a style="margin-bottom: 10px;" href="https://goo.gl/maps/F7uukCQFsCK5qqoG7"
            class="boton boton-amarillo btn-v">Llevame ahi</a>
    </section>

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