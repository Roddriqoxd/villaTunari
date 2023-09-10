<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>

<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
            </section>
        </section>

        <form action="enviar.php" method="post" class="form_contact">
            <h2 class="animal">Registrate</h2>
            <div class="user_info">
                <label for="names">Nombre(s)</label>
                <input type="text" id="names" name="nombre" required>

                <div style="display: flex; width: 100%; justify-content: space-between;">
                    <div style="display: flex; flex-direction: column; width: 48%">
                        <label for="names">Apellidos</label>
                        <input type="text" id="names" name="nombre" required>
                    </div>
                    <div style="display: flex; flex-direction: column; width: 48%">
                        <label for="names">Apellidos</label>
                        <input type="text" id="names" name="nombre" required>
                    </div>
                </div>
                <label for="email">Correo electronico</label>
                <input type="text" id="email" name="correo" required>

                <label for="password"> contraseña</label>
                <input type="password" id="password" name="comtraseña">

                <input type="submit" value="Registarse" id="btnSend">
            </div>
        </form>

    </section>
    <footer class="">
            <nav class="navegacion">
                <a href="index.php">Inicio</a>
                <a href="anuncios.php">Parques</a>
                <a href="blog.php">Ferias</a>
                <a href="registro.php">Registro</a>
            </nav>
            <p class="copyright">Gobierno Autonomo Municipal de Villa Tunari &copy;</p>
    </footer>
</body>

</html>