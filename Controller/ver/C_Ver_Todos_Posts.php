<?php

use Model\M_Posts;
require_once('Model/M_Posts.php');

$con = new M_Posts();

$posts = $con->getPosts();

// var_dump($posts);

$con->close();  

// require_once('../../Index.php');//relleno


?>