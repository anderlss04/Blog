<?php

use Model\M_Usuario;
require 'Model/M_Usuario.php';

$con = new M_Usuario();

$username = $_POST['username'];

$usuario = $con->getUser($username);

foreach($usuario as $user){
    $username = $user['username'];
    $pass = $user['password'];
    $pass = $user['email'];
    $pass = $user['created_on'];
    $pass = $user['last_login'];
    $pass = $user['active'];
    $pass = $user['first_name'];
    $pass = $user['last_name'];
    $pass = $user['rol'];
}

$con->close();

require_once('View/user/user.php');

?>