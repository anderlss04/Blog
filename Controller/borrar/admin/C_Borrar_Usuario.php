<?php

use Model\M_Usuario;

require_once('../../../Model/M_Usuario.php');

$con = new M_Usuario();
var_dump($_GET['username']);
if(isset($_GET['username'])&& $_GET['username']!= null)
$con->deleteUsuario($_GET['username']);
header('Location: ../../../Admin?dato=Usuarios');


$con->close();


?>