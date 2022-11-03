<?php
use Model\M_Usuario;

require_once('../Model/M_Usuario.php');

$con = new M_Usuario();

$usuarios = $con->getUsers();

$con->close();

require_once('../View/users/users.php');

?>