<?php

use Model\M_Usuario;

require_once('../Model/M_Usuario.php');

$con = new M_Usuario();

$username = $_POST['username'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$con->modUsuario($_POST['username'], $_POST['password'], $_POST['email'], $_POST['rol']);

?>