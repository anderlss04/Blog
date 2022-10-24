<?php

use Model\M_Usuario;
require 'Model/M_Usuario.php';

$con = new M_Usuario();

$username = $_POST['username'];

$usuario = $con->getUser($username);

foreach($usuario as $user){
    $username = $user['username'];
    $password = $user['password'];
    $password = $user['email'];
    $password = $user['created_on'];
    $password = $user['last_login'];
    $password = $user['active'];
    $password = $user['first_name'];
    $password = $user['last_name'];
    $password = $user['rol'];
}

$con->close();

require_once('View/user/user.php');

?>