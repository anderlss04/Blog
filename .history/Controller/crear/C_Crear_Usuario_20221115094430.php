<?php

use Model\M_Usuario;
use Model\Usuario;

require_once('../../Model/Usuario.php');
require_once('../../Model/M_Usuario.php');

$con = new M_Usuario();

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$created_on = date("Y-m-d");
$last_login = date("Y-m-d");
$active = 0;
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
if(  $_POST['rol'] ) {$rol =  1; } else {$rol =  0; }

$usuario = new Usuario($username, $password, $email, $created_on, $last_login, $active, $first_name, $last_name, $rol);

$con->insertUsuario($usuario);

header('Location: ../../View/login/login.php');

?>