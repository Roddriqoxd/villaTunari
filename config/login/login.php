<?php
    echo 'entro aca';
if (isset($_POST['tipo'])){ 

    switch ($_POST['tipo']){

        case 'registro':
            registrar();
            break; 

        case 'login':
            password();
            break; 
	}

}else if(isset($_GET['tipo'])){
    
    switch ($_GET['tipo']){

        case 'eliminar':
            borrar();
            break;     
    }
}

function registrar(){

    $nombre=$_POST['nombre'];
    $paterno=$_POST['paterno'];
    $materno=$_POST['materno'];
    $correo=$_POST['correo'];
    $password=md5($_POST['password']);
    $celular=$_POST['celular'];
    session_start();
    
    require_once "../conexion.php";
    $query= "INSERT INTO `registro`( `nombre`, `paterno`,`materno`,`correo`, `password`,`celular`) VALUES ('$nombre','$paterno','$materno','$correo','$password','$celular')";
    $consultado=mysqli_query($conexion, $query);

    
        if($consultado){
            $_SESSION['nombre']=$nombre;
            $_SESSION['apellido']=$paterno;
            $_SESSION['correo']=$correo;
            $_SESSION['celular']=$celular;
            header('Location: ../../index.php');
            
        }else{
            session_destroy();
            echo 'error al registrar';
        }
}
function borrar(){
    $id=$_GET['id'];

    require_once "bd.php";
    $query= "DELETE FROM `usuarios` WHERE `id` = '$id' ";
    $consultado=mysqli_query($conexion, $query);

    if($consultado){
        header('Location: ../vista/administracion.php');
    }else{
        echo 'error al eliminar';
    }
}

function password(){
    $correo=$_POST['correo'];
    $password=md5($_POST['password']);
    session_start();

    require_once "../conexion.php";
    $consulta= "SELECT * FROM registro WHERE correo='$correo' AND password='$password'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_num_rows($resultado);

    if($filas){
        while ($data = mysqli_fetch_assoc($resultado)) {
            $_SESSION['nombre']=$data['nombre'];
            $_SESSION['apellido']=$data['paterno'];
            $_SESSION['celular']=$data['celular'];
            $_SESSION['correo']=$data['correo'];
            
        }
        header('Location: ../../index.php');
    }else{
        echo 'esta fallando';
        header('Location: ../../registro.php');
        session_destroy();   
    }
}




?>