<?php

use Model\M_Posts;
require_once('../../Model/M_Posts.php');

$con = new M_Posts();


session_start();
$posts = $con->getPostsUser($_SESSION['user']);

var_dump($posts);

$con->close();  

// require_once('../../View/posts/posts.php');//relleno


?>