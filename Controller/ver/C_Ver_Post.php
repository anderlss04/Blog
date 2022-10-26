<?php

use Model\M_Posts;
require_once('../../Model/M_Posts.php');

$con = new M_Posts();

$posts = $con->getPost('Frozen'/*$_POST['title']*/);

var_dump($posts);

$con->close();  

require_once('../../View/posts/posts.php');//relleno


?>