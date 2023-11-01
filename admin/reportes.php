<?php
require_once "../config/conexion.php";
include("includes/header.php");
?>
<!-- dividir en 2 -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ferias mas populares</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="abrirCategoria"><i class="fas fa-plus fa-sm text-white-50"></i> Nuevo</a> -->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>Lugar turistico</th>
                        <th>Promedio de valoracion</th>
                        <th>Cantidad de visitantes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT * FROM parques");
                    while ($data = mysqli_fetch_assoc($query)) { 
                        $id= $data["id"];
                        $query2 = mysqli_query($conexion, "SELECT * FROM valoracion WHERE id_lugar='$id'");
                        $query3 = mysqli_query($conexion, "SELECT AVG(user_rating) AS Average FROM valoracion WHERE id_lugar = '$id'");
                        $datos = mysqli_fetch_assoc($query3);
                        $result = mysqli_num_rows($query2);
                        ?>
                    <tr>
                        <td><?php echo $data['nombre']; ?></td>
                        <td><?php echo $datos['Average'].' '.'/ de 5' ?></td>
                        <td><?php echo $result ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>