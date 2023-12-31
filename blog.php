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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/feria.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<a href="#inicio" style="background-color: yellow;
  padding: 1px 10px 10px 10px;
  position: fixed;
  border-radius: 23%;
  bottom: 0;
  right: 0;
  margin: 20px;">
    <img src="img/flecha.png" style="width: 25px;" alt="">
</a>
    <header id="inicio" class="site-header pad">
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

    <h2 class="centrar-texto fw-300 title-animal"> Eventos y Ferias Turísticas</h2><br>
    <div class=" contenedor seccion">

        <?php
                    $query = mysqli_query($conexion, "SELECT * FROM ferias");
                    while ($data = mysqli_fetch_assoc($query)) { ?>
        <tr>

            <section id="<?php echo $data['id']; ?>">
                <article class="entrada-blog case">
                    <div class="imagen" style="width: 400px;height: 300px; overflow: hidden">
                        <img style="width: 90%;" src="assets/img/<?php echo $data['img1']; ?>" alt="">
                    </div>
                    <div class="texto-entrada" style="height: 300px;">
                        <a href="entrada.php?accion=mostrar&id=<?php echo $data['id']; ?>">
                            <h4 class="titulo-feria"><?php echo $data['nombre']; ?></h4>
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
                        <p class="pe" style="">
                            <?php echo $data['descripcion']; ?>
                        </p>
                        <div class="ver-todas"
                            style="justify-content: space-between; color: while; text-decoration: none;">
                            <a href="entrada.php?accion=mostrar&id=<?php echo $data['id']; ?>"
                                class="boton boton-verde">Ver mas</a>

                                <?php 
                    if($_SESSION['nombre'] == null || $varsesion= ''){
                        ?>
                    <a href="registro.php" class="boton boton-verde">Registrate y suscribete</a>
                    <?php
                    }else{
                        ?>
                            <a href="suscripciones.php?nombre=<?php echo $data['nombre']; ?>&id=<?php echo $data['id']; ?>"
                                class="boton boton-verde">Suscribirse</a>
                    <?php
                    }
                    ?>
                        </div>
                    </div>
                </article>
            </section>
            <?php } ?>

    </div>

    <br></br>
    <div class="container">

        <?php 
    require_once "config/conexion.php";
    $query = mysqli_query($conexion, "SELECT * FROM imagenes");
?>



        <h1 class="fw300 centrar-texto"></h1>

        <!-- <article class="entrada-blog">

        </article> -->
        <div class="seccion-inferior contenedor seccion">
            <?php 
    while($row=mysqli_fetch_array($query)){
?>
            <section class="blog">
                <article class="entrada-blog">
                    <div class="imagen">
                        <img src="assets/img/<?php echo $row['img']; ?>" width="400px" height="200px">
                        <br><br><br>
                    </div>
                    <div class="texto-entrada">
                        <h4><?php echo $row['titulo']; ?></h4>
                        </a>
                        <!---<p>Escrito el: <span>20/10/2019</span>por: <span>Admin</span></p> -->
                        <p><?php echo $row['fecha']; ?></p>
                        <hr>
                        <h5><?php echo $row['info']; ?></h5>
                    </div>
                </article>
                <hr>
                <?php
                                }
                            ?>

        </div>
    </div>
    </div>
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

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>