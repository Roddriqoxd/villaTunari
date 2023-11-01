<?php
require_once "../config/conexion.php";

        $nombre = $_GET['nombre'];
        $dias = $_GET['dias'];
        $usuario = $_GET['usuario'];
        $celular = $_GET['telefono'];
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>

<script type="text/javascript">

const telefono = "<?php echo $celular; ?>";
        const url = `https://api.whatsapp.com/send?phone=${telefono}&text=
          *_¡Hola <?php echo $usuario; ?> VILLA TUNARI ¡Te Espera!_*
          *Quedan <?php echo $dias; ?> para que comience la "<?php echo $nombre; ?>". NO TE LO PIERDAS!!*`;

          window.open(url);
</script> 
<script type="text/javascript">

function redireccionarPagina() {
  window.location = "suscripciones.php";
}
setTimeout("redireccionarPagina()", 2000);
</script> 
</body>
</html>


