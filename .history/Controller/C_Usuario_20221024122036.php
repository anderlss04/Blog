<?php

use Model\M_Usuario;
require 'Model/M_Usuario.php';

$con = new M_Usuario();

$username = $_POST['username'];

$usuario = $con->getUser($username);

foreach($usuario as $user){
    $username = $user['username'];
    $password = $user['password'];
    $email = $user['email'];
    $created_on = $user['created_on'];
    $last_login = $user['last_login'];
    $active = $user['active'];
    $first_name = $user['first_name'];
    $last_name = $user['last_name'];
    $rol = $user['rol'];
}

$con->close();

require_once('View/user/user.php');
$include_pa='.;C:\xampp\php\PEAR;C:\xampp\htdocs\b2';

?>