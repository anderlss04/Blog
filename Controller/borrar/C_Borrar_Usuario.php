<?php

use Model\M_Usuario;

require_once('../Model/M_Usuario.php');

$con = new M_Usuario();

$con->deleteUsuario($_POST['username']);

$con->close();

header('Location: ../Controller/ver/C_Ver_Usuarios.php');

?>