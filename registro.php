<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Villa Tunari</title>
    <link rel="shortcut icon" href="img/icon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilos.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>

</head>

<body>

    <header class="site-header pad">
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
                </nav>
            </div>
        </div>
    </header>

    <style>
    @media screen and (max-width: 500px) {
        .form_wrap {
            width: 400px;
        }
    }
    </style>

    <section class="form_wrap">

        <!-- primera parte -->

        <form id="registro" action="config/login/login.php" method="post" class="form_contact">
            <h2 class="title-animal">Login</h2>
            <div class="user_info">

                <label for="email">Correo electronico</label>
                <input type="text" id="correo" name="correo" required>

                <label for="password"> contraseña</label>
                <input type="password" id="password" name="password">

                <input type="hidden" name="tipo" value="login">

                <input type="submit" value="Logearse" id="btnSend">
            </div>
        </form>

        <section id="registro1" class="cantact_login">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <br><br><br><br><br><br><br>
            </section>
            <section class="info_items">
                <div class="ver-todas">
                    <a onclick="visible()" class="boton boton-verde">Registrarse</a>
                </div>
            </section>
        </section>

        <!-- segunda parte  -->

        <section id="login" class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <br><br><br><br><br><br><br>
            </section>
            <section class="info_items">
                <div class="ver-todas">
                    <a onclick="invisible()" class="boton boton-verde">Logearse</a>
                </div>
            </section>
        </section>

        <form id="login1" action="config/login/login.php" method="post" class="form_contact">
            <h2 class="title-animal">Registrate</h2>
            <div class="user_info">
                <label for="names">Nombre(s)</label>
                <input type="text" id="nombre" name="nombre" required>

                <div style="display: flex; width: 100%; justify-content: space-between;">
                    <div style="display: flex; flex-direction: column; width: 48%">
                        <label for="names">Apellido paterno</label>
                        <input type="text" id="paterno" name="paterno" required>
                    </div>
                    <div style="display: flex; flex-direction: column; width: 48%">
                        <label for="names">Apellido materno</label>
                        <input type="text" id="materno" name="materno" required>
                    </div>
                </div>

                <div style="display: flex; width: 100%; justify-content: space-between;">
                    <div style="display: flex; flex-direction: column; width: 48%">
                        <label for="email">Correo electronico</label>
                        <input type="text" id="correo" name="correo" required>
                    </div>
                    <div style="display: flex; flex-direction: column; width: 48%">
                        <label for="email">Celular</label>
                        <input type="text" id="celular" name="celular" required>
                    </div>
                </div>


                <label for="password"> contraseña</label>
                <input type="password" id="password" name="password" required>

                <input type="hidden" name="tipo" value="registro">

                <input type="submit" value="Registarse" id="btnSend">
            </div>
        </form>



    </section>

    <script>
    document.getElementById('login').style.display = 'none';
    document.getElementById('login1').style.display = 'none';
    document.getElementById('registro').style.height = '573px';
    document.getElementById('registro1').style.height = '573px';


    function visible() {
        document.getElementById('login').style.display = 'flex';
        document.getElementById('login1').style.display = 'flex';

        document.getElementById('registro').style.display = 'none';
        document.getElementById('registro1').style.display = 'none';
    }

    function invisible() {
        document.getElementById('login').style.display = 'none';
        document.getElementById('login1').style.display = 'none';

        document.getElementById('registro').style.display = 'flex';
        document.getElementById('registro1').style.display = 'flex';
    }
    </script>


    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="index.php">Inicio</a>
                <a href="anuncios.php">Parques</a>
                <a href="blog.php">Ferias</a>
            </nav>
            <p class="copyright">Gobierno Autonomo Municipal de Villa Tunari &copy;</p>
        </div>
    </footer>
</body>

</html>