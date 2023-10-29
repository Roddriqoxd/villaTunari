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

    <!-- <div>
        <p></p>
    </div> -->

    <div>
        <?php
            $query = mysqli_query($conexion, "SELECT * FROM parques");
            while ($data = mysqli_fetch_assoc($query)) { ?>
        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto"></h2>
            <h2 class="fw-300 centrar-texto" style="font-family: 'animal';"><?php echo $data['nombre']; ?></h2>
            <div class="contenedor-anuncios">

                <div class="grid">
                    <img src="assets/img/<?php echo $data['img1']; ?>" alt="">
                    <img src="assets/img/<?php echo $data['img2']; ?>" alt="">
                    <img src="assets/img/<?php echo $data['img3']; ?>" alt="">
                    <img src="assets/img/<?php echo $data['img4']; ?>" alt="">
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
                        <div class="anuncioss">
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
            <!-- pupop -->
            <!-- <div class="box">
                <a class="button" href="#popup1">Let me Pop up</a>
            </div>

            <div id="popup1" class="overlay">
                <div class="popup">
                    <a class="close" href="">&times;</a>
                    <div class="content">
                    <img src="assets/img/<?php echo $data['img1']; ?>" alt="">
                    </div>
                </div>
            </div> -->
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
    </div>

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