<?php

use Model\M_Usuarios;
use Model\Usuarios;

require_once('../Model/Usuarios.php');
require_once('../Model/M_Usuarios.php');

$con = new M_Usuarios();

$nombre = $_POST['nombre'];


?>