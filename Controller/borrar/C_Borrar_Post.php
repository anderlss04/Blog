<?php

use Model\M_Posts;

require_once('../Model/M_Posts.php');

$con = new M_Posts();

$con->deletePost($_GET['id']);

$con->close();

header('Location: ../../Admin/?dato=Publicaciones&?data=1');

?>