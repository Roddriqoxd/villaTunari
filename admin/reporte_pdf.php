<?php 
ob_start();
require_once "../config/conexion.php";
sleep(1);

$fechaInit = date("Y-m-d", strtotime($_GET['f_ingreso']));
$fechaFin  = date("Y-m-d", strtotime($_GET['f_fin']));
$producto = $_GET['producto'];
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


<?php


if($producto === 'todas') {
    $sqlSolicitudes = ("SELECT * FROM valoracion WHERE datetime BETWEEN UNIX_TIMESTAMP('$fechaInit') AND UNIX_TIMESTAMP('$fechaFin')");
} else {
    $sqlSolicitudes = ("SELECT * FROM valoracion WHERE (datetime BETWEEN UNIX_TIMESTAMP('$fechaInit') AND UNIX_TIMESTAMP('$fechaFin') AND id_lugar = $producto)");
}
$query = mysqli_query($conexion, $sqlSolicitudes);
$total = mysqli_num_rows($query); 
?>

<h2 class="h3 mb-0 text-gray-800">Reporte de
    <?php echo $fechaInit; ?> a <?php echo $fechaFin; ?>
     <!-- de <?php echo $producto; ?> -->
    </h2><br>
<?php echo '<strong>Total: </strong> ('. $total .')';?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Lugar turistico</th>
            <th>Promedio de valoracion</th>
            <th>Fecha de valoracion</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($data = mysqli_fetch_assoc($query)) { 
            $id_lugar = $data['id_lugar'];
            $ferias = mysqli_query($conexion, "SELECT * FROM parques where id= '$id_lugar'");
                    while ($feria = mysqli_fetch_assoc($ferias)) { 
                ?>
        <tr>
            
            <td><?php echo $feria['nombre'].'        '; ?></td>
            <?php }?>
            <td><?php echo $data['user_rating'].' '.'/ de 5'.'        ' ?></td>
            <?php
                        $date = DateTimeImmutable::createFromFormat('U',  $data["datetime"]);
                        ?>
                         <td><?php echo $date->format('Y-m-d'); ?></td>
                         <?php  ?>
        </tr>
        <?php }?>
    </tbody>
</table>
    
</body>
</html>
<?php
$html=ob_get_clean();
//echo $html;

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf =new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled'=>true));
$dompdf->setOptions($options);

$dompdf->loadHtml("$html");

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream('archivo_pdf',array("Attachhment"=>false));
?>