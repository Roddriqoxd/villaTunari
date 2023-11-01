<?php
require_once "../config/conexion.php";
if (isset($_POST)) {
    if (!empty($_POST)) {
        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $clave = $_POST['clave'];
        $query = mysqli_query($conexion, "INSERT INTO usuarios(usuario,nombre,clave) VALUES ('$usuario','$nombre','$clave')");
        if ($query) {
            header('Location: suscripciones.php');
        }
    }
}
include("includes/header.php");
?>
<!-- dividir en 2 -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Suscripciones</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="abrirCategoria"><i class="fas fa-plus fa-sm text-white-50"></i> Nuevo</a> -->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Celular</th>
                        <th>Feria</th>
                        <!-- <th>Clave</th> -->
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT * FROM suscripciones ORDER BY id DESC");
                    while ($data = mysqli_fetch_assoc($query)) { 
                        $id_feria = $data['id_feria'];
                        $query2 = mysqli_query($conexion, "SELECT * FROM ferias WHERE id = '$id_feria'");
                        ?>
                    <tr>
                        <td><?php echo $data['nombre']; ?></td>
                        <td><?php echo $data['celular']; ?></td>
                        <?php while ($datax = mysqli_fetch_assoc($query2)) {  
                         $in = new DateTime(date("Y-m-d"));
                         $fn = new DateTime($datax['inicio']);  
                         $interval = $in->diff($fn);
                            
                            ?>
                        <td><?php echo $interval->format('%R%a días')?></td>
                        
                        <td>
                            <form method="post" action="enviar.php?nombre=<?php echo $datax['nombre']?>&dias=<?php echo $interval->format('%R%a días')?>&usuario=<?php echo $data['nombre']?>&telefono=<?php echo $data['celular']?>"
                                class="d-inline">
                                <button class="btn btn-success" type="submit">Enviar</button>
                            </form>
                        </td>
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="categorias" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="title">Nuevo usuario</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <!-- <label for="nombre">Nombre</label> -->
                        <input class="form-control" type="text" name="nombre" placeholder="Nombre completo" required>
                        <br>
                        <input class="form-control" type="text" name="usuario" placeholder="usuario" required>
                        <br>
                        <input class="form-control" type="text" name="clave" placeholder="contraseña" required>
                    </div>
                    <button class="btn btn-primary" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>