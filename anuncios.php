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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="site-header" style="padding: 15px;">
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
                            <div style="line-height: 0px; display: flex; flex-direction: column; gap: 10px;">
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

                    <div class="container">
                        <br>
                        <div class="card">
                            <div class="card-header">Valoracion</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <h1 class="text-warning mt-4 mb-4">
                                            <b><span id="<?php echo $data['id']?>average_rating">0.0</span> / 5</b>
                                        </h1>
                                        <div class="mb-3">
                                            <i class="fas fa-star star-light mr-1 main_star"></i>
                                            <i class="fas fa-star star-light mr-1 main_star"></i>
                                            <i class="fas fa-star star-light mr-1 main_star"></i>
                                            <i class="fas fa-star star-light mr-1 main_star"></i>
                                            <i class="fas fa-star star-light mr-1 main_star"></i>
                                        </div>
                                        <h3><span id="<?php echo $data['id']?>total_review">0</span> Valora este lugar
                                        </h3>
                                    </div>
                                    <div class="col-sm-4">
                                        <p>
                                        <div class="progress-label-left"><b>5</b> <i
                                                class="fas fa-star text-warning"></i></div>

                                        <div class="progress-label-right">(<span
                                                id="<?php echo $data['id']?>total_five_star_review">0</span>)
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"
                                                id="<?php echo $data['id']?>five_star_progress"></div>
                                        </div>
                                        </p>
                                        <p>
                                        <div class="progress-label-left"><b>4</b> <i
                                                class="fas fa-star text-warning"></i></div>

                                        <div class="progress-label-right">(<span
                                                id="<?php echo $data['id']?>total_four_star_review">0</span>)
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"
                                                id="<?php echo $data['id']?>four_star_progress"></div>
                                        </div>
                                        </p>
                                        <p>
                                        <div class="progress-label-left"><b>3</b> <i
                                                class="fas fa-star text-warning"></i></div>

                                        <div class="progress-label-right">(<span
                                                id="<?php echo $data['id']?>total_three_star_review">0</span>)
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"
                                                id="<?php echo $data['id']?>three_star_progress"></div>
                                        </div>
                                        </p>
                                        <p>
                                        <div class="progress-label-left"><b>2</b> <i
                                                class="fas fa-star text-warning"></i></div>

                                        <div class="progress-label-right">(<span
                                                id="<?php echo $data['id']?>total_two_star_review">0</span>)
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"
                                                id="<?php echo $data['id']?>two_star_progress"></div>
                                        </div>
                                        </p>
                                        <p>
                                        <div class="progress-label-left"><b>1</b> <i
                                                class="fas fa-star text-warning"></i></div>

                                        <div class="progress-label-right">(<span
                                                id="<?php echo $data['id']?>total_one_star_review">0</span>)
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0"
                                                aria-valuemin="0" aria-valuemax="100"
                                                id="<?php echo $data['id']?>one_star_progress"></div>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <h3 class="mt-4 mb-3">Write Review Here</h3>

                                        <?php 
                    if($_SESSION['nombre'] == null || $varsesion= ''){
                        ?>
                                        <a href="registro.php" class="btn btn-primary">Registrate para comentar</a>
                                        <?php
                    }else{
                        ?>
                                        <button type="button" name="add_review" id="<?php echo $data['id']?>add_review"
                                            class="btn btn-primary">Valora este lugar</button>
                                        <?php
                    }
                    ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5" id="<?php echo $data['id']?>review_content"></div>
                    </div>
</body>

</html>

<div id="<?php echo $data['id']?>review_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Que te parecio el <?php echo $data['nombre']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center mt-2 mb-4">
                    <i class="fas fa-star star-light submit_star mr-1" id="<?php echo $data['id']?>submit_star_1"
                        data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="<?php echo $data['id']?>submit_star_2"
                        data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="<?php echo $data['id']?>submit_star_3"
                        data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="<?php echo $data['id']?>submit_star_4"
                        data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="<?php echo $data['id']?>submit_star_5"
                        data-rating="5"></i>
                </h4>
                <div class="form-group">
                    <input type="text" name="user_name" id="<?php echo $data['id']?>user_name" class="form-control"
                        placeholder="Nombre" readonly
                        value="<?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']?>" />
                </div>
                <div class="form-group">
                    <textarea name="user_review" id="<?php echo $data['id']?>user_review" class="form-control"
                        placeholder="comentario (opcional)"></textarea>
                </div>
                <div class="form-group">
                    <input name="id_lugar" id="<?php echo $data['id']?>id_lugar" type="hidden" class="form-control"
                        value="<?php echo $data['id']?>" />
                </div>
                <div class="form-group text-center mt-4">
                    <button type="button" class="btn btn-primary" id="<?php echo $data['id']?>enviar">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.progress-label-left {
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}

.progress-label-right {
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}

.star-light {
    color: #e9ecef;
}
</style>

<script>
$(document).ready(function() {

    var rating_data = 0;

    $('#<?php echo $data['id']?>add_review').click(function() {

        $('#<?php echo $data['id']?>review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function() {

        var rating = $(this).data('rating');

        reset_background();

        for (var count = 1; count <= rating; count++) {

            $('#<?php echo $data['id']?>submit_star_' + count).addClass('text-warning');

        }

    });

    function reset_background() {
        for (var count = 1; count <= 5; count++) {

            $('#<?php echo $data['id']?>submit_star_' + count).addClass('star-light');

            $('#<?php echo $data['id']?>submit_star_' + count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function() {

        reset_background();

        for (var count = 1; count <= rating_data; count++) {

            $('#<?php echo $data['id']?>submit_star_' + count).removeClass('star-light');

            $('#<?php echo $data['id']?>submit_star_' + count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function() {

        rating_data = $(this).data('rating');

    });

    $('#<?php echo $data['id']?>enviar').click(function() {

        var user_name = $('#<?php echo $data['id']?>user_name').val();

        var user_review = $('#<?php echo $data['id']?>user_review').val();

        var id_lugar = $('#<?php echo $data['id']?>id_lugar').val();

        if (user_name == '' || user_review == '') {
            alert("Please Fill Both Field");
            return false;
        } else {
            $.ajax({
                url: "submit_rating.php",
                method: "POST",
                data: {
                    rating_data: rating_data,
                    user_name: user_name,
                    user_review: user_review,
                    id_lugar: id_lugar,
                },
                success: function(data) {
                    $('#<?php echo $data['id']?>review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data() {
        $.ajax({
            url: "submit_rating.php",
            method: "POST",
            data: {
                action: '<?php echo $data['id']?>'
            },
            dataType: "JSON",
            success: function(data) {
                $('#<?php echo $data['id']?>average_rating').text(data.average_rating);
                $('#<?php echo $data['id']?>total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function() {
                    count_star++;
                    if (Math.ceil(data.average_rating) >= count_star) {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#<?php echo $data['id']?>total_five_star_review').text(data.five_star_review);

                $('#<?php echo $data['id']?>total_four_star_review').text(data.four_star_review);

                $('#<?php echo $data['id']?>total_three_star_review').text(data.three_star_review);

                $('#<?php echo $data['id']?>total_two_star_review').text(data.two_star_review);

                $('#<?php echo $data['id']?>total_one_star_review').text(data.one_star_review);

                $('#<?php echo $data['id']?>five_star_progress').css('width', (data
                        .five_star_review / data.total_review) *
                    100 + '%');

                $('#<?php echo $data['id']?>four_star_progress').css('width', (data
                        .four_star_review / data.total_review) *
                    100 + '%');

                $('#<?php echo $data['id']?>three_star_progress').css('width', (data
                    .three_star_review / data
                    .total_review) * 100 + '%');

                $('#<?php echo $data['id']?>two_star_progress').css('width', (data.two_star_review /
                        data.total_review) *
                    100 + '%');

                $('#<?php echo $data['id']?>one_star_progress').css('width', (data.one_star_review /
                        data.total_review) *
                    100 + '%');

                if (data.review_data.length > 0) {
                    var html = '';

                    for (var count = 0; count < data.review_data.length; count++) {
                        html += '<div class="row mb-3">';

                        html +=
                            '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">' +
                            data.review_data[count].user_name.charAt(0) + '</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>' + data.review_data[count].user_name +
                            '</b></div>';

                        html += '<div class="card-body">';

                        for (var star = 1; star <= 5; star++) {
                            var class_name = '';

                            if (data.review_data[count].rating >= star) {
                                class_name = 'text-warning';
                            } else {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star ' + class_name + ' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On ' + data.review_data[count]
                            .datetime + '</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#<?php echo $data['id']?>review_content').html(html);
                }
            }
        })
    }

});
</script>




</div>
</div>
</div>
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