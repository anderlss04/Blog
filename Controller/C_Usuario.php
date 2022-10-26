<?php

use Model\M_Usuario;
require_once('../Model/M_Usuario.php');

$con = new M_Usuario();

$usuario = $con->getUsers();


var_dump($usuario);

// $path = '';
$con->close();
$con->View('../View/users/user.php', $usuario)

// require_once('../View/users/user.php');


?>