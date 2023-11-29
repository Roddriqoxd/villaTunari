<?php
sleep(1);
require_once "../config/conexion.php";
include("includes/header.php");

$fechaInit = date("Y-m-d", strtotime($_POST['f_ingreso']));
$fechaFin  = date("Y-m-d", strtotime($_POST['f_fin']));
$producto = $_POST['producto'];
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
<form method="Post"
    action="reporte_pdf.php?f_ingreso=<?php echo $fechaInit ?>&f_fin=<?php echo $fechaFin ?>&producto=<?php echo $producto ?>">
    <button class="btn btn-danger" type="submit">IMPRIMIR REPORTE EN PDF</button>
</form>
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
            
            <td><?php echo $feria['nombre']; ?></td>
            <?php }?>
            <td><?php echo $data['user_rating'].' '.'/ de 5' ?></td>
            <?php
                        $date = DateTimeImmutable::createFromFormat('U',  $data["datetime"]);
                        ?>
                         <td><?php echo $date->format('Y-m-d'); ?></td>
                         <?php  ?>
        </tr>
        <?php }?>
    </tbody>
</table>
<!-- <h5>Promedio total:</h5>
<?php 
$query3 = mysqli_query($conexion, "SELECT AVG(user_rating) AS Average FROM valoracion WHERE id_lugar = $producto");
$datos = mysqli_fetch_assoc($query3);
?>
<h5><?php echo $datos['Average'].' '.'/ de 5' ?></h5> -->
<?php include("includes/footer.php"); ?>