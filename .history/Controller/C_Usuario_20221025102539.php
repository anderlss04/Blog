<?php

use Model\M_Usuario;
require('../Model/M_Usuario.php');

$con = new M_Usuario();

$nomUsuario = $_POST['username'];

$usuario = $con->getUser($nomUsuario);

foreach($usuario as $user){
    $username = $user['username'];
    $password = $user['password'];
    $email = $user['email'];
    $created_on = $user['created_on'];
    $last_login = $user['last_login'];
    $active = $user['active'];
    $first_name = $user['first_name'];
    $last_name = $user['last_name'];
    $rol = $user['rol'];
}

$con->close();

require_once('../View/user/user.php');


?>