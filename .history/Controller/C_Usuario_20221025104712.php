<?php

use Model\M_Usuario;
require_once('../Model/M_Usuario.php');

$con = new M_Usuario();

$usuario = $con->getUsers();

<<<<<<< HEAD:.history/Controller/C_Usuario_20221025104712.php
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

=======
>>>>>>> frontJairo:Controller/C_Usuario.php

var_dump($usuario);

// $path = '';
$con->close();
$con->View('../View/users/user.php', $usuario)

// require_once('../View/users/user.php');


?>