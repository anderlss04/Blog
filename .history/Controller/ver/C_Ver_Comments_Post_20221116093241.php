<?php

use Model\M_Comments;
require_once('../../Model/M_Comments.php');

$con = new M_Comments();

// session_start();

$comments = $con->getCommentsPost($_POST['title']);

// $con->close();  

?>