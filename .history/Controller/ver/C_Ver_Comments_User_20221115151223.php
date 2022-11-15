
<?php

use Model\M_Comments;
require_once('../../Model/M_Comments.php');

$con = new M_Comments();

session_start();

$posts = $con->getCommentsUser($_SESSION['user']);

// var_dump($posts);

$con->close();  

?>