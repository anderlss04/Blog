<?php 
namespace Model;
require_once 'Usuario.php';
require_once 'Conexion.php';

Class M_Login extends Conexion{


    public function  comprobarUser($nombre, $dni){
        $datos = parent::con()->query("SELECT username, password FROM users WHERE username = '$nombre' AND password = '$dni'");
    return $datos;
    }

}


?>