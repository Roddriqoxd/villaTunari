<?php 
session_start();
error_reporting(0);
require_once "config/conexion.php"; 

if (isset($_GET)) {
    if (!empty($_GET['accion']) && !empty($_GET['id'])) {
        require_once "config/conexion.php";
        $id = $_GET['id'];
        $nombre = $_SESSION['nombre'].' '.$_SESSION['apellido'];
        $correo = $_SESSION['correo'];
        $query2 = mysqli_query($conexion, "SELECT * FROM suscripciones WHERE correo = '$correo'");
        $result = mysqli_num_rows($query2);
        if ($_GET['accion'] == 'suscribirse') {
            $query = mysqli_query($conexion, "INSERT INTO suscripciones (id_feria, correo, nombre) VALUES ('$id', '$correo', '$nombre')");
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
                    <a href="nosotros.php">inicio</a>
                    <a href="anuncios.php">Parques</a>
                    <a href="blog.php">Ferias</a>
                    <a href="contacto.php">Registro</a>
                </nav>
            </div>
        </div>
    </header>

    <div>
        <table class="table table-hover table-bordered" style="width: 100%;">
            <thead class="thead-dark">
                <tr>
                    <th>Imagen</th>
                    <th>Feria</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $result = mysqli_num_rows($query2);
            if ($result > 0) {
            while ($data = mysqli_fetch_assoc($query2)) { ?>
                <tr>
                    <!-- <td><img class="img-thumbnail" src="../assets/img/<?php echo $fer['img1']; ?>" width="50"></td> -->
                    <td><?php echo $data['id_feria']; ?></td>
                    <td><?php echo $data['nombre']; ?></td>
                    <td>
                        <form method="post" action="eliminar.php?accion=avi&id=<?php echo $data['id']; ?>"
                            class="d-inline eliminar">
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php  }
                } ?>
            </tbody>
        </table>
    </div>
    <!-- <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Inicio</a>
                <a href="anuncios.php">Parques</a>
                <a href="blog.php">Ferias</a>
                <a href="contacto.php">Registro</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2019 &copy;</p>
        </div>
    </footer> -->


</body>

</html>