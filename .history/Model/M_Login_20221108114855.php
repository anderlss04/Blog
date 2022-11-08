<?php 
namespace Model;
require_once 'Usuario.php';
require_once 'Conexion.php';

Class M_Login extends Conexion{


    public function  comprobarUser($nombre, $dni){
        $datos = parent::con()->query("SELECT username, pass FROM estudiante WHERE nombre = '$nombre' AND dni = '$dni'");
    return $datos;
    }

}


?>