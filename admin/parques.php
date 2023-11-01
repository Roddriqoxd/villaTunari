<?php
require_once "../config/conexion.php";

if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $informacion = $_POST['informacion'];
        $ubicacion = $_POST['ubicacion'];
        $telefonos = $_POST['telefonos'];
        $lunes = $_POST['lunes'];
        $martes = $_POST['martes'];
        $miercoles = $_POST['miercoles'];
        $jueves = $_POST['jueves'];
        $viernes = $_POST['viernes'];
        $sabado = $_POST['sabado'];
        $domingo = $_POST['domingo'];
        $estatus = $_POST['status'];

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

        $img3 = $_FILES['img3'];
        $foto3 = $img3['name'];
        $tmpname3 = $img3['tmp_name'];
        $fecha3 = date("YmdHis");
        $name3 = $foto3;
        $destino3 = "../assets/img/" . $name3;

        $img4 = $_FILES['img4'];
        $foto4 = $img4['name'];
        $tmpname4 = $img4['tmp_name'];
        $fecha4 = date("YmdHis");
        $name4 = $foto4;
        $destino4 = "../assets/img/" . $name4;

        $img5 = $_FILES['img5'];
        $foto5 = $img5['name'];
        $tmpname5 = $img5['tmp_name'];
        $fecha5 = date("YmdHis");
        $name5 = $foto5;
        $destino5 = "../assets/img/" . $name5;

        $img6 = $_FILES['img6'];
        $foto6 = $img6['name'];
        $tmpname6 = $img6['tmp_name'];
        $fecha6 = date("YmdHis");
        $name6 = $foto6;
        $destino6 = "../assets/img/" . $name6;

        $query = mysqli_query($conexion, 
        "INSERT INTO parques (nombre, informacion, ubicacion, lunes, martes ,miercoles , jueves, viernes , sabado , domingo , telefonos, img1, img2, img3, img4, img5, img6, estatus ) 
        VALUES ('$nombre','$informacion','$ubicacion', '$lunes','$martes','$miercoles','$jueves','$viernes','$sabado','$domingo', '$telefonos', '$name1', '$name2','$name3','$name4','$name5','$name6','$estatus')");

        if ($query) {
            if (move_uploaded_file($tmpname1, $destino1) 
            && move_uploaded_file($tmpname2, $destino2)
            && move_uploaded_file($tmpname3, $destino3)
            && move_uploaded_file($tmpname4, $destino4)
            && move_uploaded_file($tmpname5, $destino5)
            && move_uploaded_file($tmpname6, $destino6) ) {
                header('Location: parques.php');
            }
        }
    }
}
include("includes/header.php"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">parques turisticos</h1>
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
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT * FROM parques");
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <td><img class="img-thumbnail" src="../assets/img/<?php echo $data['img1']; ?>" width="50"></td>
                        <td><?php echo $data['nombre']; ?></td>
                        <td><?php echo $data['estatus']; ?></td>
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
                <h5 class="modal-title" id="title">Nuevo Parque</h5>
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
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Informacion</label>
                                <textarea id="descripcion" class="form-control" name="informacion"
                                    placeholder="Informacion" rows="2" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Ubicacion HTML</label>
                                <a href="https://www.google.com/maps" target="_blank">https://www.google.com/maps</a>
                                <textarea id="descripcion" class="form-control" name="ubicacion"
                                    placeholder="<iframe src=https://www.google.com/maps/embed?pb..." rows="2"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre">Telefonos</label>
                                <input id="nombre" class="form-control" type="text" name="telefonos"
                                    placeholder="Nombre" required>
                            </div>
                        </div>
                        <label class="col-5" for="descripcion">Horarios de atencion</label>
                        <div class="col-md-12 p-5">

                            <div class="form-group row">
                                <label class="col-3" for="descripcion">Lunes</label>
                                <select class="form-select" name="lunes" aria-label="Default select example">
                                    <option selected value="Todo el dia">Todo el dia</option>
                                    <option value="Solo en las mañanas">Solo en las mañanas</option>
                                    <option value="Solo en las tardes">Solo en las tardes</option>
                                    <option value="Horario continuo">Horario continuo</option>
                                    <option value="cerrado">Cerrado</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-3" for="descripcion">Martes</label>
                                <select class="form-select" name="martes" aria-label="Default select example">
                                    <option selected value="Todo el dia">Todo el dia</option>
                                    <option value="Solo en las mañanas">Solo en las mañanas</option>
                                    <option value="Solo en las tardes">Solo en las tardes</option>
                                    <option value="Horario continuo">Horario continuo</option>
                                    <option value="cerrado">Cerrado</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-3" for="descripcion">Miercoles</label>
                                <select class="form-select" name="miercoles" aria-label="Default select example">
                                    <option selected value="Todo el dia">Todo el dia</option>
                                    <option value="Solo en las mañanas">Solo en las mañanas</option>
                                    <option value="Solo en las tardes">Solo en las tardes</option>
                                    <option value="Horario continuo">Horario continuo</option>
                                    <option value="cerrado">Cerrado</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-3" for="descripcion">Jueves</label>
                                <select class="form-select" name="jueves" aria-label="Default select example">
                                    <option selected value="Todo el dia">Todo el dia</option>
                                    <option value="Solo en las mañanas">Solo en las mañanas</option>
                                    <option value="Solo en las tardes">Solo en las tardes</option>
                                    <option value="Horario continuo">Horario continuo</option>
                                    <option value="cerrado">Cerrado</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-3" for="descripcion">Viernes</label>
                                <select class="form-select" name="viernes" aria-label="Default select example">
                                    <option selected value="Todo el dia">Todo el dia</option>
                                    <option value="Solo en las mañanas">Solo en las mañanas</option>
                                    <option value="Solo en las tardes">Solo en las tardes</option>
                                    <option value="Horario continuo">Horario continuo</option>
                                    <option value="cerrado">Cerrado</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-3" for="descripcion">Sabado</label>
                                <select class="form-select" name="sabado" aria-label="Default select example">
                                    <option selected value="Todo el dia">Todo el dia</option>
                                    <option value="Solo en las mañanas">Solo en las mañanas</option>
                                    <option value="Solo en las tardes">Solo en las tardes</option>
                                    <option value="Horario continuo">Horario continuo</option>
                                    <option value="cerrado">Cerrado</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-3" for="descripcion">Domingo</label>
                                <select class="form-select" name="domingo" aria-label="Default select example">
                                    <option selected value="Todo el dia">Todo el dia</option>
                                    <option value="Solo en las mañanas">Solo en las mañanas</option>
                                    <option value="Solo en las tardes">Solo en las tardes</option>
                                    <option value="Horario continuo">Horario continuo</option>
                                    <option value="cerrado">Cerrado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="imagen">Foto principal</label>
                                <input type="file" class="form-control" name="img1" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="imagen">Foto</label>
                                <input type="file" class="form-control" name="img2" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="imagen">Foto</label>
                                <input type="file" class="form-control" name="img3" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="imagen">Foto</label>
                                <input type="file" class="form-control" name="img4" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="imagen">Foto</label>
                                <input type="file" class="form-control" name="img5" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="imagen">Foto</label>
                                <input type="file" class="form-control" name="img6" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre">Status actual de parque</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option selected value="Abierto al publico">Abierto al publico</option>
                                    <option value="En mantenimiento">En mantenimiento</option>
                                    <option value="Proximamente abierto">Proximamente abierto</option>
                                    <option value="Cerrado al publico">Cerrado al publico</option>
                                </select>
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