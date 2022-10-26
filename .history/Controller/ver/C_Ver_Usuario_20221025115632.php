<?php

use Model\M_Usuario;

require_once('../Model/M_Usuario.php');

$con = new M_Usuario();

$usuario = $con->getUser('tsiggin0');

// var_dump($usuario);

$username = $usuario['username'];
$password = $usuario['password'];
$email = $usuario['email'];
$created_on = $usuario['created_on'];
$last_login = $usuario['last_login'];
$active = $usuario['active'];
$first_name = $usuario['first_name'];
$last_name = $usuario['last_name'];
$rol = $usuario['rol'];


$con->close();

require_once('../View/users/user.php');
