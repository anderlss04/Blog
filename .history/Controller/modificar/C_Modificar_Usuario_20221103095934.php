<?php

use Model\M_Usuario;
use Model\Usuario;

require_once('../Model/Usuario.php');
require_once('../Model/M_Usuario.php');

$con = new M_Usuario();

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$created_on = $_POST['created_on'];
$last_login = $_POST['last_login'];
$active = $_POST['active'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$con->modUsuario($_POST['username'], $_POST['password'], $_POST['email'], $_POST['rol']);

?>