<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ferias</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/feria.css">
    </head>
    
<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/"><p>TURISMO DEL MUNICIPIO DE VILLA TUNARI</p></a>
               
                <div class="mobile-menu">
                    <a href="#navegacion">
                    
                        <img src="img/villa.jpg" alt="Icono menu">
                    </a>
                </div>
                <nav id="navegacion" class="navegacion">
                    <a href="index.php">Inicio</a>
                    <a href="anuncios.php">Parques</a>
                    <a href="blog.php">Ferias</a>
                    <a href="registro.php">Registro</a>
                </nav>
            </div>
        </div>
    </header>
    <!--EMPIEZO--->
    <body>
    <h2>FERIAS DEL MUNICIPIO DE VILLA TUNARI</h2>
    <div class="content-all">
        <div class="content-carrousel">
            <figure><img src="img/feria 11.jfif"></figure>
            <figure><img src="img/feria 12.jfif"></figure>
            <figure><img src="img/feria 13.jfif"></figure>
            <figure><img src="img/feria 14.jfif"></figure>
            <figure><img src="img/feria 11.jfif"></figure>
            <figure><img src="img/feria 12.jfif"></figure>
            <figure><img src="img/feria 13.jfif"></figure>
            <figure><img src="img/feria 11.jfif"></figure>
            <figure><img src="img/feria 12.jfif"></figure>
            <figure><img src="img/feria 13.jfif"></figure>
        </div>
    </div>
</body>
    <!--FIN--->
    <br></br><br></br><br></br><br></br>
    <h1>Calendario  de Eventos y Ferias Turísticas</h1>
    <img src="img/calendario.png" width="600px" alt="10">

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
                    <img src="assets/img/<?php echo $row['img']; ?>" width="400px" height="200px" >
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
<!-- fin de avisos -->
<!-- comentarios -->
<!--  -->
  <!-- fin de comentarios -->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>