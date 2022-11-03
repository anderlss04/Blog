<?php

use Model\M_Usuario;

require_once('../Model/M_Usuario.php');

$con = new M_Usuario();

$username = 

$con->modUsuario($_POST['username'], $_POST['password'], $_POST['email'], $_POST['rol']);

?>