<?php

use Model\M_Usuario;
use Model\Usuarios;

require_once('../Model/Usuarios.php');
require_once('../Model/M_Usuarios.php');

$con = new M_Usuario();

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$created_on = $_POST['created_on'];





?>