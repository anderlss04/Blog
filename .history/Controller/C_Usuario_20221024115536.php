<?php

use Model\M_Usuario;
require 'Model/M_Usuario.php';

$con = new M_Usuario();

$username = $_POST['username'];

$usuario = $con->getUser($username);

foreach($usuario as $user){
    echo $user['username'];
    echo $user['password'];
    echo $user['email'];
    echo $user['created_on'];
    echo $user['last_login'];
    echo $user['active'];
    echo $user['first_name'];
    echo $user['last_name'];
    echo $user['rol'];
}

$con->close();



?>