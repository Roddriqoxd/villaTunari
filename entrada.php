<?php require_once "config/conexion.php"; 
session_start();
error_reporting(0);
if (isset($_GET)) {
    if (!empty($_GET['accion']) && !empty($_GET['id'])) {
        require_once "config/conexion.php";
        $id = $_GET['id'];
        if ($_GET['accion'] == 'mostrar') {
            $query = mysqli_query($conexion, "SELECT * FROM ferias WHERE id = $id");
            }
        }
    }
?>

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
                        <img src="img/barras.svg" alt="Icono menu">
                    </a>
                </div>
                <nav id="navegacion" class="navegacion">
                    <a href="index.php">inicio</a>
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
    <?php
            $result = mysqli_num_rows($query);
            if ($result > 0) {
            while ($data = mysqli_fetch_assoc($query)) { ?>
    <h1 class="fw-300 centrar-texto animal"><?php echo $data['nombre']; ?></h1>


    <main class="contenedor seccion contenido-centrado texto-entrada">
        <img style="width: 100%;" src="assets/img/<?php echo $data['img1']; ?>" alt="">
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

        <p class="justificar"><?php echo $data['descripcion'] ?></p>
        <br>
        <img style="width: 100%;" src="assets/img/<?php echo $data['img2']; ?>" alt="">
        <br>
        <p class="justificar"><?php echo $data['descripcion'] ?></p>
        <br>
        <h4>Ubicacion</h4>
        <br>
        <?php echo $data['ubicacion']; ?>

    </main>
    <?php  }
                } ?>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Inicio</a>
                <a href="anuncios.php">Parques</a>
                <a href="blog.php">Ferias</a>
                <a href="contacto.php">Registro</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2019 &copy;</p>
        </div>
    </footer>


</body>

</html>