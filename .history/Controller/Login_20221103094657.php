<?php 
use Model\M_Login;
require_once('../Model/M_Login.php');

if(isset($_POST['nombre']) && $_POST['pass'] ){
    $nombre= $_POST['nombre'];
    $dni = $_POST['pass'];
    $nuevo = new  M_Login();
   $datos = $nuevo ->comprobarUser($nombre, $dni);
   var_dump($datos);
    if(!$datos){
        print_r("error usuario o contraseña ");
        header("Location: ../index.php");
    }else{
        session_start();
        $_SESSION['user'] = $nombre;
        header("Location: portada.php");
    }
}

?>