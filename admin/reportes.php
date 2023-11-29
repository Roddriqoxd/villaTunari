 <?php
require_once "../config/conexion.php";
include("includes/header.php");
?>
 <!-- dividir en 2 -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Reporte de ferias</h1>
     <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" id="abrirCategoria"> Generar reporte</a> -->
 </div>

 <div class="row">
     <div class="col-md-12 text-center mt-5">
         <form action="filtracion.php" method="post" accept-charset="utf-8">
             <div class="row">
                 <div class="col">
                     <input type="date" name="f_ingreso" class="form-control" placeholder="Fecha de Inicio" required>
                 </div>
                 <div class="col">
                     <input type="date" name="f_fin" class="form-control" placeholder="Fecha Final" required>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <select id="producto" class="form-control" name="producto" required>
                             <option value="todas">Todas las ferias</option>
                             <?php
                                    $categorias = mysqli_query($conexion, "SELECT * FROM parques");
                                    foreach ($categorias as $cat) { ?>
                             <option value="<?php echo $cat['id']; ?>"><?php echo $cat['nombre']; ?></option>
                             <?php } ?>
                         </select>
                     </div>
                 </div>
                 <div class="col">
                     <button type="submit" class="btn btn-success mb-2">Filtrar Reporte</button>
                 </div>
             </div>
         </form>
     </div>
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
                         <!-- <th>Fecha de valoracion</th> -->
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
                         <!-- <?php
                    while ($fecha = mysqli_fetch_assoc($query2)) {
                        $date = DateTimeImmutable::createFromFormat('U',  $fecha["datetime"]);
                        ?>
                         <td><?php echo $date->format('Y-m-d'); ?></td>
                         <?php } ?> -->
                     </tr>
                     <?php } ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
 <?php include("includes/footer.php"); ?>