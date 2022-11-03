<?php

use Model\M_Posts;

require_once('../Model/M_Posts.php');

$con = new M_Posts();

$con->deletePost($_POST['id']);

$con->close();

header('Location: ../Controller/ver/C_Ver_Posts.php');

?>