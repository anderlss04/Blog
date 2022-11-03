<?php

use Model\M_Usuario;
use Model\Usuario;

require_once('../Model/Usuario.php');
require_once('../Model/M_Usuarios.php');

$con = new M_Usuario();

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$created_on = $_POST['created_on'];
$last_login = $_POST['last_login'];
$active = $_POST['active'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$rol = $_POST['rol'];

$usuario = new Usuario($id, $username, $password, $email, $created_on, $last_login, $active, $first_name, $last_name, $rol);

$con->insertUsuario($usuario);



?>