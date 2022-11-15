
<?php

use Model\M_Comments;
require_once('../../Model/M_Posts.php');

$con = new M_Comments();


session_start();

$C = $con->getCommentsPost($_POST['title']);

// var_dump($posts);

$con->close();  

// require_once('../../View/posts/posts.php');//relleno


?>