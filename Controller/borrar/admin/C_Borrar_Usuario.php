<?php

use Model\M_Usuario;

require_once('../../Model/M_Usuario.php');

$con = new M_Usuario();
if(isset($_GET['username']))
$con->deleteUsuario($_GET['username']);
// header('Location: Admin');


$con->close();


?>