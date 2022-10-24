<?php

use Model\M_Usuario;
require 'Model/M_Usuario.php';

$con = new M_Usuario();

$username = $_POST['username'];

$usuario = $con->getUser($username);

foreach($usuario as $user){
    $username = $user['username'];
     = $user['password'];
     = $user['email'];
     = $user['created_on'];
     = $user['last_login'];
     = $user['active'];
     = $user['first_name'];
     = $user['last_name'];
     = $user['rol'];
}

$con->close();

require_once('View/user/user.php');

?>