<?php 
namespace Model;
require_once 'Usuario.php';
require_once 'Conexion.php';

Class M_Login extends Conexion{


    public function  comprobarUser($username, $password){
        $datos = parent::con()->query("SELECT username, password FROM users WHERE username = '$username' AND password = '$password'");
    return $datos;
    }

}


?>