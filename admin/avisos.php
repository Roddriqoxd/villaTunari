<?php
require_once "../config/conexion.php";

if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $info = $_POST['info'];
        $inicio = $_POST['inicio'];
        $fin = $_POST['fin'];
        $ubicacion = $_POST['ubicacion'];
 
        $img1 = $_FILES['img1'];
        $foto1 = $img1['name'];
        $tmpname1 = $img1['tmp_name'];
        $fecha = date("YmdHis");
        $name1 = $foto1;
        $destino1 = "../assets/img/" . $name1;

        $img2 = $_FILES['img2'];
        $foto2 = $img2['name'];
        $tmpname2 = $img2['tmp_name'];
        $fecha2 = date("YmdHis");
        $name2 = $foto2;
        $destino2 = "../assets/img/" . $name2;

        $query = mysqli_query($conexion, "INSERT INTO ferias (nombre, descripcion, inicio, fin, ubicacion, img1, img2) 
                                                    VALUES ('$nombre', '$info', '$inicio' , '$fin' , '$ubicacion', '$name1', '$name2')");
        if ($query) {
            if (move_uploaded_file($tmpname1, $destino1) 
            && move_uploaded_file($tmpname2, $destino2)) {
                $query = mysqli_query($conexion, "UPDATE ferias SET fin = NULL WHERE fin = '0000-00-00'");
                header('Location: avisos.php');
            }
        }
    }
}


include("includes/header.php"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ferias y eventos</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="abrirProducto"><i
            class="fas fa-plus fa-sm text-white-50"></i> Nuevo</a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT * FROM ferias");
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><img class="img-thumbnail" src="../assets/img/<?php echo $data['img1']; ?>" width="50"></td>
                        <td><?php echo $data['nombre']; ?></td>
                        <td><?php echo $data['inicio']; ?></td>
                        <td><?php echo $data['fin']; ?></td>
                        <td>
                            <form method="post" action="eliminar.php?accion=avi&id=<?php echo $data['id']; ?>"
                                class="d-inline eliminar">
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="productos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title" id="title">Nuevo feria</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea id="descripcion" class="form-control" name="info" placeholder="Descripción"
                                    rows="2" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Fecha de inicio</label>
                                <input id="fecha" class="form-control" type="date" name="inicio" placeholder="fecha"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nombre">Fecha de conclusion (opcional)</label>
                                <input id="fecha" class="form-control" type="date" name="fin" placeholder="fecha">
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                                <label for="descripcion">Ubicacion (HTML)</label>
                                <textarea id="descripcion" class="form-control" name="ubicacion" placeholder="<iframe src=https://www.google.com/maps/embed?pb..."
                                    rows="2" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="imagen">Foto principal</label>
                                <input type="file" class="form-control" name="img1" required>
                            </div>
                            <div class="form-group">
                                <label for="imagen">Foto secundaria</label>
                                <input type="file" class="form-control" name="img2" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>